const appPrefix = "sitalasJamkrida";
const loginAs = localStorage.getItem(appPrefix);

// APP DEFAULT CUSTOMIZEABLE THEME STYLE
let primaryColor = "", hoverColor = "", accentColor = "", bgTheadColor = "", textTheadColor = "";
let primaryColorDark = "", hoverColorDark = "", accentColorDark = "", bgTheadColorDark = "", textTheadColorDark = "";

const getSavedColor = () => {
  const savedPrimaryColor = localStorage.getItem(`${appPrefix}PrimaryColor`);
  const savedAccentColor = localStorage.getItem(`${appPrefix}AccentColor`);
  const savedBgTheadColor = localStorage.getItem(`${appPrefix}BgTheadColor`);
  const savedTextTheadColor = localStorage.getItem(`${appPrefix}TextTheadColor`);

  if(savedPrimaryColor != null) {
    primaryColor = savedPrimaryColor;
  } else {
    primaryColor = "#0e716d";
  }
  if(savedAccentColor != null) {
    accentColor = savedAccentColor;
  } else {
    accentColor = "#00c292";
  }
  if(savedBgTheadColor != null) {
    bgTheadColor = savedBgTheadColor;
  } else {
    bgTheadColor = "#CCEEF6";
  }
  if(savedTextTheadColor != null) {
    textTheadColor = savedTextTheadColor;
  } else {
    textTheadColor = "#212529";
  }

  const savedPrimaryColorDark = localStorage.getItem(`${appPrefix}PrimaryColorDark`);
  const savedAccentColorDark = localStorage.getItem(`${appPrefix}AccentColorDark`);
  const savedBgTheadColorDark = localStorage.getItem(`${appPrefix}BgTheadColorDark`);
  const savedTextTheadColorDark = localStorage.getItem(`${appPrefix}TextTheadColorDark`);

  if(savedPrimaryColorDark != null) {
    primaryColorDark = savedPrimaryColorDark;
  } else {
    primaryColorDark = "#2c3692";
  }
  if(savedAccentColorDark != null) {
    accentColorDark = savedAccentColorDark;
  } else {
    accentColorDark = "#3bd94d";
  }
  if(savedBgTheadColorDark != null) {
    bgTheadColorDark = savedBgTheadColorDark;
  } else {
    bgTheadColorDark = "#1E515E";
  }
  if(savedTextTheadColorDark != null) {
    textTheadColorDark = savedTextTheadColorDark;
  } else {
    textTheadColorDark = "#ADB5BD";
  }
}

getSavedColor();

const rootElement = document.querySelector(":root");
let darkMode;

const updateTheme = () => {
  darkMode = localStorage.getItem(`${appPrefix}DarkMode`)

  if (darkMode) {
    rootElement.setAttribute('data-bs-theme', 'dark')
    rootElement.style.cssText = `
      --primary-color: ${primaryColorDark};
      --primary-color-hover: ${primaryColorDark}CC;
      --accent-color: ${accentColorDark};
      --bg-thead-color: ${bgTheadColorDark};
      --text-thead-color: ${textTheadColorDark};
    `;
  }
  else {
    rootElement.setAttribute('data-bs-theme', 'light')
    rootElement.style.cssText = `
      --primary-color: ${primaryColor};
      --primary-color-hover: ${primaryColor}CC;
      --accent-color: ${accentColor};
      --bg-thead-color: ${bgTheadColor};
      --text-thead-color: ${textTheadColor};
    `;
  }
}

updateTheme();

const toggleInputTheme = (darkMode) => {
  const toggleColorLight = document.querySelectorAll('.toggler_color_light');
  const toggleColorDark = document.querySelectorAll('.toggler_color_dark');

  if(toggleColorLight != null) {
    if(darkMode) {
      toggleColorLight.forEach(input => { input.classList.add('d-none') })
      toggleColorDark.forEach(input => { input.classList.remove('d-none') })
    } else {
      toggleColorLight.forEach(input => { input.classList.remove('d-none') })
      toggleColorDark.forEach(input => { input.classList.add('d-none') })
    }
  }
}

const toggleTheme = () => {
  darkMode = localStorage.getItem(`${appPrefix}DarkMode`)

  if (darkMode) {
    localStorage.removeItem(`${appPrefix}DarkMode`)
  }
  else {
    localStorage.setItem(`${appPrefix}DarkMode`, 'true')
  }

  toggleInputTheme(!darkMode);
  getSavedColor();
  updateTheme();
}


// THEME CUSTOMIZER
const inputPrimaryColor = document.getElementById("theme_primary_color");
const inputAccentColor = document.getElementById("theme_accent_color");
const inputBgTheadColor = document.getElementById("theme_bg_thead_color");
const inputTextTheadColor = document.getElementById("theme_text_thead_color");

const updatePerColor = (el, defaultColor, colorSuffix, cssVar) => {
  if(el != null) {
    el.value = defaultColor;

    el.addEventListener("change", () => {
      localStorage.setItem(`${appPrefix}${colorSuffix}`, el.value);
      rootElement.style.setProperty(cssVar, el.value);
      if(colorSuffix === "PrimaryColor") {
        rootElement.style.setProperty("--primary-color-hover", `${el.value}CC`);
      }
    })
  }
}

const inputPrimaryColorDark = document.getElementById("theme_primary_color_dark");
const inputAccentColorDark = document.getElementById("theme_accent_color_dark");
const inputBgTheadColorDark = document.getElementById("theme_bg_thead_color_dark");
const inputTextTheadColorDark = document.getElementById("theme_text_thead_color_dark");

const updatePerColorDark = (el, defaultColor, colorSuffix, cssVar) => {
  if(el != null) {
    el.value = defaultColor;

    el.addEventListener("change", () => {
      localStorage.setItem(`${appPrefix}${colorSuffix}`, el.value);
      rootElement.style.setProperty(cssVar, el.value);
      if(colorSuffix === "PrimaryColorDark") {
        rootElement.style.setProperty("--primary-color-hover", `${el.value}CC`);
      }
    })
  }
}


// RESET THEME COLOR
const resetColor = document.getElementById("reset_color");
if(resetColor != null) {
  resetColor.addEventListener("click", () => {
    Swal.fire({
      title: 'Anda yakin ingin reset ke warna tema default?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#DC3545',
      confirmButtonText: 'Reset',
      cancelButtonColor: '#6C757D',
      cancelButtonText: "Tutup"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'Reset warna tema berhasil!',
          icon: 'success',
          confirmButtonColor: '#6C757D',
          confirmButtonText: 'Tutup',
        })
        localStorage.removeItem(`${appPrefix}PrimaryColor`);
        localStorage.removeItem(`${appPrefix}AccentColor`);
        localStorage.removeItem(`${appPrefix}BgTheadColor`);
        localStorage.removeItem(`${appPrefix}TextTheadColor`);
        localStorage.removeItem(`${appPrefix}PrimaryColorDark`);
        localStorage.removeItem(`${appPrefix}AccentColorDark`);
        localStorage.removeItem(`${appPrefix}BgTheadColorDark`);
        localStorage.removeItem(`${appPrefix}TextTheadColorDark`);
        getSavedColor();
        updateTheme();
        updatePerColor(inputPrimaryColor, primaryColor, "PrimaryColor", "--primary-color");
        updatePerColor(inputAccentColor, accentColor, "AccentColor", "--accent-color");
        updatePerColor(inputBgTheadColor, bgTheadColor, "BgTheadColor", "--bg-thead-color");
        updatePerColor(inputTextTheadColor, textTheadColor, "TextTheadColor", "--text-thead-color");
        updatePerColorDark(inputPrimaryColorDark, primaryColorDark, "PrimaryColorDark", "--primary-color");
        updatePerColorDark(inputAccentColorDark, accentColorDark, "AccentColorDark", "--accent-color");
        updatePerColorDark(inputBgTheadColorDark, bgTheadColorDark, "BgTheadColorDark", "--bg-thead-color");
        updatePerColorDark(inputTextTheadColorDark, textTheadColorDark, "TextTheadColorDark", "--text-thead-color");
      }
    })
  });
}


// CUSTOM TEMPLATE
window.onload = ()=> {
  const body = document.querySelector("body");
  body.classList.add("custom-layout-1");

  if(body.classList.contains("custom-layout-2")) {
    setTimeout(()=> {
      const collapse = document.querySelector(".collapse.in");
      if(collapse != null) {
        collapse.classList.remove("in");
      }
    }, 10);

    const backToTop = document.querySelector(".scroll-top");
    backToTop.addEventListener("click", ()=> {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    })

    this.onscroll = ()=> {
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTop.style.display = "block";
      } else {
        backToTop.style.display = "none";
      }
    }

    $(function () {
      function e() {
        let e = (0 < window.innerHeight ? window.innerHeight : this.screen.height) - 1;
        (e -= 108) < 1 && (e = 1), 108 < e && $(".page-wrapper").css("min-height", e + "px")
      }
      $(window).ready(e);
      $(window).on("resize", e);
    })
  }

  updatePerColor(inputPrimaryColor, primaryColor, "PrimaryColor", "--primary-color");
  updatePerColor(inputAccentColor, accentColor, "AccentColor", "--accent-color");
  updatePerColor(inputBgTheadColor, bgTheadColor, "BgTheadColor", "--bg-thead-color");
  updatePerColor(inputTextTheadColor, textTheadColor, "TextTheadColor", "--text-thead-color");
  updatePerColorDark(inputPrimaryColorDark, primaryColorDark, "PrimaryColorDark", "--primary-color");
  updatePerColorDark(inputAccentColorDark, accentColorDark, "AccentColorDark", "--accent-color");
  updatePerColorDark(inputBgTheadColorDark, bgTheadColorDark, "BgTheadColorDark", "--bg-thead-color");
  updatePerColorDark(inputTextTheadColorDark, textTheadColorDark, "TextTheadColorDark", "--text-thead-color");
  toggleInputTheme(darkMode);
}


// ENABLE BOOTSTRAP TOOLTIPS
const tooltipList = [...document.querySelectorAll('[data-bs-toggle="tooltip"]')].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

$(document).ready(function() {
  $('.select2').select2();
});