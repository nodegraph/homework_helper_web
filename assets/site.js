(() => {
  "use strict";
  document.querySelectorAll(".mobile-nav a").forEach((link) => {
    link.addEventListener("click", () => {
      link.closest("details").open = false;
    });
  });
  const tabs = [...document.querySelectorAll("[data-platform]")];
  const videos = [...document.querySelectorAll(".demo-player video")];
  function selectTab(tab, moveFocus = false) {
    videos.forEach((video) => video.pause());
    tabs.forEach((item) => {
      const selected = item === tab;
      item.setAttribute("aria-selected", String(selected));
      item.tabIndex = selected ? 0 : -1;
      document.getElementById(item.getAttribute("aria-controls")).hidden =
        !selected;
    });
    if (moveFocus) tab.focus();
  }
  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => selectTab(tab));
    tab.addEventListener("keydown", (event) => {
      let next;
      if (event.key === "ArrowRight") next = (index + 1) % tabs.length;
      if (event.key === "ArrowLeft")
        next = (index - 1 + tabs.length) % tabs.length;
      if (event.key === "Home") next = 0;
      if (event.key === "End") next = tabs.length - 1;
      if (next !== undefined) {
        event.preventDefault();
        selectTab(tabs[next], true);
      }
    });
  });
  document.querySelectorAll(".video-start").forEach((button) => {
    const video = button.parentElement.querySelector("video");
    const error = button.closest(".demo-panel").querySelector(".video-error");
    button.addEventListener("click", async () => {
      videos.forEach((other) => {
        if (other !== video) other.pause();
      });
      error.hidden = true;
      if (!video.getAttribute("src")) {
        video.src = video.dataset.src;
        video.load();
      }
      button.hidden = true;
      try {
        await video.play();
        video.focus();
      } catch {
        button.hidden = false;
        error.hidden = false;
      }
    });
    video.addEventListener("error", () => {
      error.hidden = false;
      button.hidden = false;
    });
  });
  document.addEventListener("visibilitychange", () => {
    if (document.hidden) videos.forEach((video) => video.pause());
  });
})();
