/**
 * This JavaScript file contains template functionality
 * to improve overall user experience (UX).
 * 
 * The use of functionality in this mockup template
 * can/will be replaced upon app developing.
 * 
 * There are 29 functionality segments in total:
 * 
 * APP PREFIX FOR DYNAMIC LOGIN & MENU
 * DYNAMIC PROFILE NAME
 * TOASTR OPTIONS
 * APP DEFAULT CUSTOMIZEABLE THEME STYLE
 * THEME CUSTOMIZER
 * RESET THEME COLOR
 * CUSTOM TEMPLATE
 * ENABLE BOOTSTRAP TOOLTIPS
 * ENABLE SELECT2
 * DYNAMIC LOGIN SIMULATION
 * DYNAMIC MENU & PROFILE NAME SIMULATION + WELCOME TOAST
 * GO BACK ONE PAGE
 * TABLE SEARCH ENTRY (ALL COLUMNS)
 * DELETE ROW TABLE
 * OPEN FORM ADD/EDIT ITEM
 * CHECK FORM CONTENT
 * REMOVE ELEMENT BASED ON FORM STATE
 * MODIFY MODAL FORM
 * FORM SUBMITTED TOAST
 * POPUP UPDATE DATA SUCCEEDED
 * OPEN SIDEBAR ITEM IN FORM DETAIL
 * CHART DASHBOARD INIT
 * CKEDITOR INIT
 * DATATABLES INIT
 * DATEPICKER INIT
 * PERFECT SCROLLBAR INIT
 * FORMAT IDR CURRENCY
 * BOOTSTRAP FORM VALIDATION
 * CUSTOM INPUT FILE DRAG & DROP
 * 
 * Copyright (c) 2021-2023 Agung Sulaksana <sulaksana34@gmail.com>
 */


// APP PREFIX FOR DYNAMIC LOGIN & MENU
const appPrefix = "sitalasJamkrida";
const loginAs = localStorage.getItem(appPrefix);
let loginAsName = "";


// DYNAMIC PROFILE NAME
if(loginAs != null) {
  switch(loginAs) {
    case "admin":
      loginAsName = "Administrator";
      break;
    case "operator":
      loginAsName = "Operator Surat";
      break;
    case "kadiv":
      loginAsName = "Kepala Divisi";
      break;
    case "direktur":
      loginAsName = "Direktur Utama";
      break;
    default:
      break;
  }
}


// TOASTR OPTIONS
toastr.options = {
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};


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
    primaryColor = "#2c3692";
  }
  if(savedAccentColor != null) {
    accentColor = savedAccentColor;
  } else {
    accentColor = "#0c9648";
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


// ENABLE SELECT2
$(document).ready(function() {
  const select2Arr = [...document.getElementsByClassName("select2")];
  select2Arr.forEach(el => {
    const modalParent = el.closest(".modal");
    if(modalParent != null) {
      $(el).select2({
        dropdownParent: $(`#${modalParent.id}`),
      });
    } else {
      $(el).select2();
    }
  })
});


// DYNAMIC LOGIN SIMULATION
const loginForm = document.getElementById("loginform");
if(loginForm != null) {
  const username = document.getElementById("identity");

  loginForm.addEventListener("submit", () => {
    switch(username.value) {
      case "admin":
        localStorage.setItem(appPrefix, username.value);
        sessionStorage.setItem(`${appPrefix}Toast`, true);
        loginForm.action = "app/admin/dashboard";
        break;
      case "operator":
        localStorage.setItem(appPrefix, username.value);
        sessionStorage.setItem(`${appPrefix}Toast`, true);
        loginForm.action = "app/admin/dashboard";
        break;
      case "kadiv":
        localStorage.setItem(appPrefix, username.value);
        sessionStorage.setItem(`${appPrefix}Toast`, true);
        loginForm.action = "app/admin/dashboard";
        break;
      case "direktur":
        localStorage.setItem(appPrefix, username.value);
        sessionStorage.setItem(`${appPrefix}Toast`, true);
        loginForm.action = "app/admin/dashboard";
        break;
      default:
        loginForm.action = "./";
        break;
    }
  })
}


// DYNAMIC MENU & PROFILE NAME SIMULATION + WELCOME TOAST
if(loginAs != null) {
  // MENU
  const navItem = [...document.getElementsByClassName(`nav-${loginAs}`)];
  navItem.forEach(el => {
    el.classList.remove("d-none");
  })

  // PROFILE NAME
  const profileName = document.getElementById("profile_name");
  if(profileName != null) {
    profileName.innerHTML = loginAsName;
  }

  const namaLengkap = document.getElementById("nama_lengkap");
  if(namaLengkap != null) {
    namaLengkap.value = loginAsName;
  }

  // WELCOME TOAST
  const welcomeToast = sessionStorage.getItem(`${appPrefix}Toast`);
  if(welcomeToast != null) {
    toastr.info(`Selamat datang, ${loginAsName}`);
    sessionStorage.removeItem(`${appPrefix}Toast`);
  }
}


// GO BACK ONE PAGE
const goBack = () => {
  window.history.back();
}


// TABLE SEARCH ENTRY (ALL COLUMNS)
const searchField = document.getElementById("pencarian");
if(searchField != null) {
  searchField.addEventListener("change", () => {
    const tableRow = [...document.querySelectorAll("table tbody tr")],
          keyword = searchField.value.toUpperCase();

    tableRow.forEach(el => {
      const tableCol = el.getElementsByTagName("td"),
            tableColLength = tableCol.length;

      for(let i = 0; i < tableColLength; i++) {
        if(tableCol[i].innerText.toUpperCase().indexOf(keyword) > -1) {
          el.style.display = "";
          break;
        } else {
          el.style.display = "none";
        }
      }
    })
  })
}


// DELETE ROW TABLE
const delRow = [...document.getElementsByClassName("del_row")];
if(delRow != null) {
  delRow.forEach(el => {
    el.addEventListener("click", () => {
      Swal.fire({
        title: 'Anda yakin ingin menghapus item ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#DC3545',
        confirmButtonText: 'Hapus',
        cancelButtonColor: '#6C757D',
        cancelButtonText: "Tutup"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Hapus data berhasil!',
            icon: 'success',
            confirmButtonColor: '#6C757D',
            confirmButtonText: 'Tutup',
          })
          elTr = el.closest("tr").remove();
        }
      })
    })
  })
}


// OPEN FORM ADD/EDIT ITEM
const add_edit_form = (obj, bool) => {
  const object = [...document.getElementsByClassName(obj)];

  if (object != null) {
    object.forEach(el => {
      el.addEventListener("click", () => {
        window.open(location.href + "_form", "_self");
        sessionStorage.setItem("formTerisi", bool);
      })
    })
  }
}

add_edit_form("open_form", "false");
add_edit_form("edit_form", "true");


// CHECK FORM CONTENT
const check_form_content = (type, value) => {
  const status_form = sessionStorage.getItem("formTerisi");

  if(status_form != null && status_form === "false") {
    const obj = [...document.getElementsByTagName(type)];
    
    obj.forEach(el => {
      el.value = value;
    })
  }
}

check_form_content("input", "");
check_form_content("select", "");
check_form_content("textarea", "");


// REMOVE ELEMENT BASED ON FORM STATE
const status_form = sessionStorage.getItem("formTerisi");

if(status_form != null && status_form === "false") {
  const form_false_del = [...document.getElementsByClassName("form_false_del")];
  
  form_false_del.forEach(el => {
    el.style.display = "none";
  })
}

if(status_form != null && status_form === "true") {
  const form_true_del = [...document.getElementsByClassName("form_true_del")];

  form_true_del.forEach(el => {
    el.style.display = "none";
  })
}


// MODIFY MODAL FORM
const check_open_modal = (arr, type, emptyValue) => {
  arr.forEach(el => {
    if(sessionStorage.getItem(type+i) === "" || sessionStorage.getItem(type+i) == null) {
      sessionStorage.setItem(type+i, el.value);
    }
    el.value = emptyValue;
  })
}

const check_edit_modal = (arr, type) => {
  arr.forEach(el => {
    if(sessionStorage.getItem(type+i) !== null) {
      el.value = sessionStorage.getItem(type+i);
    }
  })
}

const open_modal = [...document.getElementsByClassName("open_modal")],
      edit_modal = [...document.getElementsByClassName("edit_modal")],
      modal_input = [...document.querySelectorAll(".modal input")],
      modal_select = [...document.querySelectorAll(".modal select")],
      modal_textarea = [...document.querySelectorAll(".modal textarea")];

if(open_modal != null) {
  open_modal.forEach(el => {
    el.addEventListener("click", () => {
      check_open_modal(modal_input, "modal_input", "");
      check_open_modal(modal_select, "modal_select", "");
      check_open_modal(modal_textarea, "modal_textarea", "");
    })
  })
}

if(edit_modal != null) {
  edit_modal.forEach(el => {
    el.addEventListener("click", ()=> {
      check_edit_modal(modal_input, "modal_input");
      check_edit_modal(modal_select, "modal_select");
      check_edit_modal(modal_textarea, "modal_textarea");
    })
  })
}


// FORM SUBMITTED TOAST
const formData = document.getElementById("form_data");
if(formData != null) {
  formData.addEventListener("submit", event => {
    if(formData.checkValidity()) {
      const customMessage = formData.getAttribute("data-alert-message");
      if(customMessage != null) {
        sessionStorage.setItem(`${appPrefix}ToastMessage`, customMessage);
      }
      sessionStorage.setItem(`${appPrefix}FormSubmitted`, true);
    }
  })
}

const formSubmitted = sessionStorage.getItem(`${appPrefix}FormSubmitted`),
      toastMessage = sessionStorage.getItem(`${appPrefix}ToastMessage`);
if(formSubmitted != null) {
  if(toastMessage != null) {
    toastr.success(`${toastMessage}`);
    sessionStorage.removeItem(`${appPrefix}ToastMessage`);
  } else {
    if(status_form === "false") {
      toastr.success(`Tambah data berhasil!`);
    } else {
      toastr.success(`Edit data berhasil!`);
    }
  }
  sessionStorage.removeItem(`${appPrefix}FormSubmitted`);
  sessionStorage.setItem("formTerisi", true);
}


// POPUP UPDATE DATA SUCCEEDED
const actionUpdate = document.getElementById("action_update");
if(actionUpdate != null) {
  actionUpdate.addEventListener("click", () => {
    Swal.fire({
      title: 'Update data berhasil!',
      icon: 'success',
      showCancelButton: false,
      confirmButtonColor: '#6C757D',
      confirmButtonText: 'Tutup'
    })
  })
}


// OPEN SIDEBAR ITEM IN FORM DETAIL
const navLink = [...document.querySelectorAll("#sidebarnav li a")];
if(navLink != null) {
  navLink.forEach(el => {
    const elHref = el.href,
          plainHref = elHref.split("/");
          plainHref.splice(0, 5);
    
    const elPath = plainHref.join("/")
    if(window.location.pathname.indexOf(elPath) > -1 && elPath != "") {
      el.classList.add("active");
      const topUL = el.closest(".top_ul");
      if(topUL != null) {
        topUL.classList.add("in");
      }
    }
  })
}


// CHART DASHBOARD INIT
const chart_init = (elem, chartType, chartData, chartOptions) => {
  const ctx = document.getElementById(elem).getContext('2d');

  const chartJS = new Chart(ctx, {
    type: chartType,
    data: chartData,
    options: chartOptions
  })
}


// CKEDITOR INIT
const ckeditorInit = [...document.getElementsByClassName("ckeditor4")];
ckeditorInit.forEach(el => {
  const placeholder = el.getAttribute("data-placeholder");
  console.log(placeholder);
  CKEDITOR.replace(el, {
    customConfig: "../../js/ckeditor.config.js",
    editorplaceholder: `${placeholder}`
  });
})


// DATATABLES INIT
const dataTablesInit = [...document.getElementsByClassName("datatable")];
if(dataTablesInit != null) {
  dataTablesInit.forEach(dt => {
    const dtPageLength = dt.getAttribute("dt-page-length");
    const dtOrderInt = dt.getAttribute("dt-order-int");
    const dtOrderSort = dt.getAttribute("dt-order-sort");
    $(dt).DataTable({
      responsive: "true",
      pageLength: dtPageLength ? dtPageLength : 10,
      order: dtOrderInt && dtOrderSort ? [[dtOrderInt, dtOrderSort]] : [],
      language: {
        lengthMenu: "Menampilkan _MENU_ entri per-halaman",
        zeroRecords: "Data tidak ditemukan",
        info: "Menampilkan _START_ - _END_ dari _TOTAL_ entri",
        infoEmpty: "Tidak ada data",
        infoFiltered: "(difilter dari total _MAX_ entri)",
        paginate: {
          next: "Selanjutnya",
          previous: "Sebelumnya"
        },
        search: "Pencarian",
      },
    });
  })
}

// DATEPICKER INIT
const datepickerInit = document.getElementsByClassName("datepicker");
if(datepickerInit != null) {
  $('.datepicker').datepicker({
    format: "dd MM yyyy",
    language: "id",
    autoclose: true
  });
}


// PERFECT SCROLLBAR INIT
const psInit = document.getElementsByClassName("perfect-scroll");
if(psInit != null) {
	$(".perfect-scroll").perfectScrollbar();
}


// FORMAT & UNFORMAT IDR CURRENCY
const formatIDR = (param) => (
  new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(param)
)

const unformatIDR = (param) => {
  const arr = [...param];
  arr.splice(0,3);
  const arrRes = arr.join("");

  const decArr = arrRes.split(".").join("").split(",").join(".");

  return parseFloat(decArr);
}

const formIDR = [...document.getElementsByClassName("form-idr")];
formIDR.forEach(el => {
  if(el.value != "") {
    let val = Number(el.value);
    el.value = formatIDR(val);
  }

  el.addEventListener("change", () => {
    val = Number(el.value);
    if(!isNaN(val)) {
      val = Number(el.value);
      el.value = formatIDR(val);
    } else {
      el.value = "";
    }
    el.blur();
  })
  el.addEventListener("focus", () => {
    el.value = "";
  })
})


// BOOTSTRAP FORM VALIDATION
const formsValidate = [...document.getElementsByClassName("needs-validation")];
if(formsValidate != null) {
  formsValidate.forEach(form => {
    form.addEventListener("submit", event => {
      if(!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      } else {
        const fieldIDR = [...form.getElementsByClassName("form-idr")];
        fieldIDR.forEach(field => {
          field.value = unformatIDR(field.value);
        })
      }

      form.classList.add("was-validated")
    })
  })
}


// CUSTOM INPUT FILE DRAG & DROP
const inputFiles = [...document.querySelectorAll(".file-drag-drop")];
if(inputFiles != null) {
  inputFiles.forEach(inputFile => {
    const customSpan = document.createElement("span");
    customSpan.classList.add("drag-drop-label");
    customSpan.setAttribute("data-label", "📂 Drag & drop atau pilih file");

    inputFile.parentElement.style.position = "relative";
    inputFile.parentNode.insertBefore(customSpan, inputFile.nextSibling);

    inputFile.addEventListener("change", () => {
      const collection = [];

      const filesArr = [...inputFile.files];
      filesArr.forEach(file => {
        collection.push(file.name);
      })

      const labelSpan = inputFile.nextSibling;
      const fileName = collection.join(", ");

      labelSpan.setAttribute("data-label", `📂 ${fileName}`);
      labelSpan.classList.add("text-dark");
    })
  })
}