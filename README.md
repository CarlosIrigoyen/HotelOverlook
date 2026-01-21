
Sistema de administración hotelera desarrollado con Laravel 12, PostgreSQL y Docker.

## Características Principales

### 🏨 Gestión de Habitaciones
- 50 habitaciones máximo configurable
- 4 tipos de habitaciones: Standard, Deluxe, Executive, Presidential
- Estados: Disponible, Ocupada, En Limpieza, En Mantenimiento
- Servicios incluidos por tipo de habitación

### 📅 Sistema de Reservas
- Calendario interactivo con FullCalendar
- Check-in/Check-out automático
- Control de capacidad y disponibilidad
- Precios dinámicos por tipo de habitación

### 🛎️ Servicios Adicionales
- Masajes (Swedish, Deep Tissue)
- Snacks (Chocolate Basket, Cheese Platter)
- Lavandería
- Transporte (Airport Transfer, City Tour)
- Setup romántico

### 🧹 Sistema de Limpieza
- Limpieza automática después del check-out
- Duración configurable (1 hora por defecto)
- Registro de limpiezas completadas

### 📊 Dashboard Integral
- Estadísticas en tiempo real
- Vista de ocupación
- Gráficos de distribución
- Acciones rápidas con modales

## Requisitos del Sistema

- Docker y Docker Compose
- 2GB RAM mínimo
- 1GB espacio en disco

## Instalación Rápida

1. **Clonar y configurar:**
```bash
git clone [repository-url]
cd hotel-overlook
cp .env.example .env 