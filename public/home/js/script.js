// Elementos DOM
const iaContainer = document.getElementById("ia-container")
const searchInput = document.getElementById("search-input")
const categoriaSelect = document.getElementById("categoria-select")

// Estado actual y datos
let allIAs = []
let allCategorias = []
let currentCategoriaId = "all"

// Función para obtener las categorías
async function fetchCategorias() {
  try {
    const response = await fetch("/api/categorias")

    if (!response.ok) {
      throw new Error("Error al cargar las categorías")
    }

    const data = await response.json()
    allCategorias = data

    // Llenar el selector de categorías
    renderCategoriaOptions()
  } catch (error) {
    console.error("Error:", error)
  }
}

// Función para renderizar las opciones de categorías
function renderCategoriaOptions() {
  // Mantener la opción "Todas las categorías"
  categoriaSelect.innerHTML = '<option value="all">Todas las categorías</option>'

  // Agregar cada categoría como una opción
  allCategorias.forEach((categoria) => {
    const option = document.createElement("option")
    option.value = categoria.id
    option.textContent = categoria.categoria
    categoriaSelect.appendChild(option)
  })
}

// Función para obtener las IAs
async function fetchIAs() {
  try {
    // Mostrar loader mientras se cargan los datos
    iaContainer.innerHTML = `
            <div class="loader">
                <div class="loader-spinner"></div>
            </div>
        `

    // Determinar qué endpoint usar según la categoría seleccionada
    let url = "/api/ias"
    if (currentCategoriaId !== "all") {
      url = `/api/ias/categoria/${currentCategoriaId}`
    }

    // Realizar la petición a la API de Laravel
    const response = await fetch(url)

    if (!response.ok) {
      throw new Error("Error al cargar los datos")
    }

    const data = await response.json()
    allIAs = data

    // Aplicar filtros iniciales
    filterIAs()
  } catch (error) {
    console.error("Error:", error)
    iaContainer.innerHTML = `
            <p class="no-results">Error al cargar los datos. Por favor, intenta de nuevo más tarde.</p>
        `
  }
}

// Renderizar tarjetas de IA
function renderIAs(iasToRender) {
  iaContainer.innerHTML = ""

  if (iasToRender.length === 0) {
    iaContainer.innerHTML = '<p class="no-results">No se encontraron resultados</p>'
    return
  }

  iasToRender.forEach((ia) => {
    const card = document.createElement("div")
    card.className = "ia-card"

    // Usar la URL completa para las imágenes
    const logoUrl = ia.logo.startsWith("http") ? ia.logo : `/storage/${ia.logo}`

    card.innerHTML = `
            <div class="ia-logo">
                <img src="${logoUrl}" alt="${ia.nombre} logo" onerror="this.src='/placeholder.svg?height=200&width=200'">
            </div>
            <div class="ia-content">
                <div class="ia-header">
                    <h2 class="ia-name">${ia.nombre}</h2>
                    <span class="ia-categoria">${ia.categoria ? ia.categoria.categoria : "Sin categoría"}</span>
                </div>
                <p class="ia-description">${ia.descripcion}</p>
                <a href="${ia.url}" target="_blank" class="ia-link">Visitar</a>
            </div>
        `

    iaContainer.appendChild(card)
  })
}

// Filtrar IAs
function filterIAs() {
  const searchTerm = searchInput.value.toLowerCase()

  let filteredIAs = allIAs

  // Aplicar búsqueda
  if (searchTerm) {
    filteredIAs = filteredIAs.filter(
      (ia) =>
        ia.nombre.toLowerCase().includes(searchTerm) ||
        ia.descripcion.toLowerCase().includes(searchTerm) ||
        (ia.categoria && ia.categoria.categoria.toLowerCase().includes(searchTerm)),
    )
  }

  renderIAs(filteredIAs)
}

// Event Listeners
searchInput.addEventListener("input", filterIAs)

categoriaSelect.addEventListener("change", () => {
  currentCategoriaId = categoriaSelect.value
  fetchIAs()
})

// Inicializar la página
document.addEventListener("DOMContentLoaded", async () => {
  // Primero cargar las categorías
  await fetchCategorias()

  // Luego cargar las IAs
  await fetchIAs()
})

