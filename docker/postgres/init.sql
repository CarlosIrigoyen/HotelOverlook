-- Crear extensiones necesarias
CREATE EXTENSION IF NOT EXISTS "uuid-ossp";

-- Habilitar índices GIN para búsquedas
CREATE EXTENSION IF NOT EXISTS pg_trgm;