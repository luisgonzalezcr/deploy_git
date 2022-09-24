// dark mode

const checkbox = document.querySelector("#inputCk");
const html = document.querySelector("body");

// encontramos todos los elementos y los itereamos abajo para darle las clases
const inputs = document.querySelectorAll("#dark_form input");
const select = document.querySelectorAll("#dark_form select");
const textareas = document.querySelectorAll("#dark_form textarea");
const buttons = document.querySelectorAll("#dark_form button");
const tables = document.querySelectorAll("body table");
const dropdown_menus = document.querySelectorAll("body .dropdown-menu");
const accordion_items = document.querySelectorAll("body .accordion-item");
const spans = document.querySelectorAll("body span");
const h2s = document.querySelectorAll("body h2");
const ps = document.querySelectorAll("body p");
const dark_divs = document.querySelectorAll("#dark_div div");
const dark_div_tecno = document.querySelectorAll("#dark_tecnologias div");

// for (var i = 0, element; (element = inputs[i++]); ) {
//   if (element.value === "") console.log("it's an empty textfield");
// }

// Check if the user has dark mode enabled
const toggleDarkMode = () => {
  // checkbox.checked ? html.classList.add("dark") : html.classList.remove("dark");
  // con localStorage
  checkbox.checked
    ? localStorage.setItem("dark_", "dark")
    : localStorage.removeItem("dark_", "dark");
  // comprobamos si existe el item en localStorage para activar el modo oscuro atuomáticamente
  if (localStorage.getItem("dark_")) {
    checkbox.checked = true;
    html.classList.add("bg-dark");
    html.classList.add("text-white");

    // inputs
    for (var i = 0, element; (element = inputs[i++]); ) {
      element.classList.add("bg-dark");
      element.classList.add("text-white");
      element.classList.add("border");
    }

    // selects
    for (var i = 0, element; (element = select[i++]); ) {
      element.classList.add("bg-dark");
      element.classList.add("text-white");
      element.classList.add("border");
    }

    // textareas
    for (var i = 0, element; (element = textareas[i++]); ) {
      element.classList.add("bg-dark");
      element.classList.add("text-white");
      element.classList.add("border");
    }
    // buttons
    for (var i = 0, element; (element = buttons[i++]); ) {
      element.classList.add("bg-dark");
      element.classList.add("text-white");
      element.classList.add("border");
    }

    // tables
    for (var i = 0, element; (element = tables[i++]); ) {
      element.classList.add("table-dark");
    }
    // dropdown_menus
    for (var i = 0, element; (element = dropdown_menus[i++]); ) {
      element.classList.add("dropdown-menu-dark");
    }
    // accordion_items
    for (var i = 0, element; (element = accordion_items[i++]); ) {
      element.classList.add("bg-dark");
      element.classList.add("text-white");
      element.classList.add("border");
    }
    // span
    for (var i = 0, element; (element = spans[i++]); ) {
      element.classList.add("bg-dark");
      element.classList.add("text-white");
    }
    // h2s
    for (var i = 0, element; (element = h2s[i++]); ) {
      element.classList.add("text-white");
    }
    // ps
    for (var i = 0, element; (element = ps[i++]); ) {
      element.classList.add("text-white");
    }
    // dark_div_tecno
    for (var i = 0, element; (element = dark_div_tecno[i++]); ) {
      element.classList.remove("bs-gray-100");
      element.classList.remove("opacity-50");
    }
    // dark_divs
     for (var i = 0, element; (element = dark_divs[i++]); ) {
      element.classList.add("bg-dark");
      element.classList.remove("bg-body");

    }
  } else {
    checkbox.checked = false;
    html.classList.remove("bg-dark");
    html.classList.remove("text-white");

    // inputs
    for (var i = 0, element; (element = inputs[i++]); ) {
      element.classList.remove("bg-dark");
      element.classList.remove("text-white");
      element.classList.remove("border");
    }

    // selects
    for (var i = 0, element; (element = select[i++]); ) {
      element.classList.remove("bg-dark");
      element.classList.remove("text-white");
      element.classList.remove("border");
    }
    // buttons
    for (var i = 0, element; (element = buttons[i++]); ) {
      element.classList.remove("bg-dark");
      element.classList.remove("text-white");
      element.classList.remove("border");
    }

    // textareas
    for (var i = 0, element; (element = textareas[i++]); ) {
      element.classList.remove("bg-dark");
      element.classList.remove("text-white");
      element.classList.remove("border");
    }
    // tables
    for (var i = 0, element; (element = tables[i++]); ) {
      element.classList.remove("table-dark");
    }
    // dropdown_menus
    for (var i = 0, element; (element = dropdown_menus[i++]); ) {
      element.classList.remove("dropdown-menu-dark");
    }
    // accordion_items
    for (var i = 0, element; (element = accordion_items[i++]); ) {
      element.classList.remove("bg-dark");
      element.classList.remove("text-white");
      element.classList.remove("border");
    }
    // span
    for (var i = 0, element; (element = spans[i++]); ) {
      element.classList.remove("bg-dark");
      element.classList.remove("text-white");
    }
    // h2s
    for (var i = 0, element; (element = h2s[i++]); ) {
      element.classList.remove("text-white");
    }

    // ps
    for (var i = 0, element; (element = ps[i++]); ) {
      element.classList.remove("text-white");
    }
    // dark_div_tecno
    for (var i = 0, element; (element = dark_div_tecno[i++]); ) {
      element.classList.add("bs-gray-100");
      element.classList.add("opacity-50");
    }
    // dark_divs
    for (var i = 0, element; (element = dark_divs[i++]); ) {
      element.classList.remove("bg-dark");
      element.classList.add("bg-body");
    }
  }
};

// al actualizar la pagina revisa si existe el item en localStorage para activar el modo oscuro atuomáticamente
if (localStorage.getItem("dark_")) {
  checkbox.checked = true;
  html.classList.add("bg-dark");
  html.classList.add("text-white");

  // inputs
  for (var i = 0, element; (element = inputs[i++]); ) {
    element.classList.add("bg-dark");
    element.classList.add("text-white");
    element.classList.add("border");
  }

  // selects
  for (var i = 0, element; (element = select[i++]); ) {
    element.classList.add("bg-dark");
    element.classList.add("text-white");
    element.classList.add("border");
  }
  // textareas
  for (var i = 0, element; (element = textareas[i++]); ) {
    element.classList.add("bg-dark");
    element.classList.add("text-white");
    element.classList.add("border");
  }
  // buttons
  for (var i = 0, element; (element = buttons[i++]); ) {
    element.classList.add("bg-dark");
    element.classList.add("text-white");
    element.classList.add("border");
  }
  // tables
  for (var i = 0, element; (element = tables[i++]); ) {
    element.classList.add("table-dark");
  }
  // dropdown_menus
  for (var i = 0, element; (element = dropdown_menus[i++]); ) {
    element.classList.add("dropdown-menu-dark");
  }
  // accordion_items
  for (var i = 0, element; (element = accordion_items[i++]); ) {
    element.classList.add("bg-dark");
    element.classList.add("text-white");
    element.classList.add("border");
  }
  // span
  for (var i = 0, element; (element = spans[i++]); ) {
    element.classList.add("bg-dark");
    element.classList.add("text-white");
  }
   h2s
  for (var i = 0, element; (element = h2s[i++]); ) {
    element.classList.add("text-white");
  }
  // ps
  for (var i = 0, element; (element = ps[i++]); ) {
    element.classList.add("text-white");
  }
  // dark_div_tecno
  for (var i = 0, element; (element = dark_div_tecno[i++]); ) {
    element.classList.remove("bs-gray-100");
    element.classList.remove("opacity-50");
  }
  // dark_divs
     for (var i = 0, element; (element = dark_divs[i++]); ) {
      element.classList.add("bg-dark");
      element.classList.remove("bg-body");
   
    }
} else {
  checkbox.checked = false;
  html.classList.remove("bg-dark");
  html.classList.remove("text-white");

  // inputs
  for (var i = 0, element; (element = inputs[i++]); ) {
    element.classList.remove("bg-dark");
    element.classList.remove("text-white");
    element.classList.remove("border");
  }

  // selects
  for (var i = 0, element; (element = select[i++]); ) {
    element.classList.remove("bg-dark");
    element.classList.remove("text-white");
    element.classList.remove("border");
  }

  // textareas
  for (var i = 0, element; (element = textareas[i++]); ) {
    element.classList.remove("bg-dark");
    element.classList.remove("text-white");
    element.classList.remove("border");
  }

  // buttons
  for (var i = 0, element; (element = buttons[i++]); ) {
    element.classList.remove("bg-dark");
    element.classList.remove("text-white");
    element.classList.remove("border");
  }

  // tables
  for (var i = 0, element; (element = tables[i++]); ) {
    element.classList.remove("table-dark");
  }
  // dropdown_menus
  for (var i = 0, element; (element = dropdown_menus[i++]); ) {
    element.classList.remove("dropdown-menu-dark");
  }
  // accordion_items
  for (var i = 0, element; (element = accordion_items[i++]); ) {
    element.classList.remove("bg-dark");
    element.classList.remove("text-white");
    element.classList.remove("border");
  }
  // span
  for (var i = 0, element; (element = spans[i++]); ) {
    element.classList.remove("bg-dark");
    element.classList.remove("text-white");
  }
  // h2s
  for (var i = 0, element; (element = h2s[i++]); ) {
    element.classList.remove("text-white");
  }
  // ps
  for (var i = 0, element; (element = ps[i++]); ) {
    element.classList.remove("text-white");
  }
  // dark_div_tecno
  for (var i = 0, element; (element = dark_div_tecno[i++]); ) {
    element.classList.add("bs-gray-100");
    element.classList.add("opacity-50");
  }
  // dark_divs
     for (var i = 0, element; (element = dark_divs[i++]); ) {
       element.classList.remove("bg-dark");
      element.classList.add("bg-body");
 
    }
}

// llamamos a la funcion para que se active el modo oscuro automáticamente
checkbox.addEventListener("click", toggleDarkMode);
toggleDarkMode();
