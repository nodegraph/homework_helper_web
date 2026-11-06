(() => {
  "use strict";
  const themeKey = "homework-helper-theme";
  const themeRoot = document.documentElement;
  const themeButton = document.querySelector(".theme-toggle");
  const validTheme = (value) => value === "light" || value === "dark";
  let themePreference = null;
  try {
    const storedTheme = localStorage.getItem(themeKey);
    if (validTheme(storedTheme)) themePreference = storedTheme;
  } catch {
    // Keep the toggle usable in browsers that disable local storage.
  }

  function applyTheme(theme) {
    themeRoot.dataset.theme = theme;
    themeRoot.style.colorScheme = theme;
    const themeColor = document.querySelector('meta[name="theme-color"]');
    if (themeColor) {
      themeColor.content = theme === "dark" ? "#141917" : "#faf9f6";
    }
    if (themeButton) {
      const action = `Switch to ${theme === "dark" ? "light" : "dark"} mode`;
      themeButton.setAttribute("aria-label", action);
      themeButton.title = action;
      themeButton.querySelector(".theme-toggle-label").textContent =
        theme === "dark" ? "Dark" : "Light";
    }
  }

  function followThemePreference() {
    applyTheme(themePreference || "light");
  }

  followThemePreference();
  if (themeButton) {
    themeButton.hidden = false;
    themeButton.addEventListener("click", () => {
      themePreference = themeRoot.dataset.theme === "dark" ? "light" : "dark";
      applyTheme(themePreference);
      try {
        localStorage.setItem(themeKey, themePreference);
      } catch {
        // An explicit choice remains active for this visit without storage.
      }
    });
  }
  window.addEventListener("storage", (event) => {
    if (event.key === themeKey || event.key === null) {
      themePreference = validTheme(event.newValue) ? event.newValue : null;
      followThemePreference();
    }
  });

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
