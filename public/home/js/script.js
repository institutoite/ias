// Elementos DOM
const iaContainer = document.getElementById("ia-container")
const searchInput = document.getElementById("search-input")
const filterButtons = document.querySelectorAll(".filter-btn")

// Estado actual del filtro y datos
let currentFilter = "all"
let allIAs = []

// Función para obtener los datos de la API de Laravel
async function fetchIAs() {
  try {
    // Mostrar loader mientras se cargan los datos
    iaContainer.innerHTML = `
            <div class="loader">
                <div class="loader-spinner"></div>
            </div>
        `

    // Realizar la petición a la API de Laravel
    const response = await fetch("/api/ias")

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
                    <span class="ia-status ${ia.estado ? "status-active" : "status-inactive"}">
                        ${ia.estado ? "Activa" : "Inactiva"}
                    </span>
                </div>
                <p class="ia-description">${ia.descripcion}</p>
            </div>
        `

    iaContainer.appendChild(card)
  })
}

// Filtrar IAs
function filterIAs() {
  const searchTerm = searchInput.value.toLowerCase()

  let filteredIAs = allIAs

  // Aplicar filtro de estado
  if (currentFilter !== "all") {
    const isActive = currentFilter === "active"
    filteredIAs = filteredIAs.filter((ia) => ia.estado === isActive)
  }

  // Aplicar búsqueda
  if (searchTerm) {
    filteredIAs = filteredIAs.filter(
      (ia) => ia.nombre.toLowerCase().includes(searchTerm) || ia.descripcion.toLowerCase().includes(searchTerm),
    )
  }

  renderIAs(filteredIAs)
}

// Event Listeners
searchInput.addEventListener("input", filterIAs)

filterButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // Actualizar botones activos
    filterButtons.forEach((btn) => btn.classList.remove("active"))
    button.classList.add("active")

    // Actualizar filtro actual
    currentFilter = button.getAttribute("data-filter")

    // Aplicar filtros
    filterIAs()
  })
})

// Cargar datos al iniciar la página
document.addEventListener("DOMContentLoaded", fetchIAs)

