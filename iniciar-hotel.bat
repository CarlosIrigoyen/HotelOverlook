@echo off
echo Iniciando Hotel Overlook...
timeout /t 5 /nobreak

REM Iniciar Docker Desktop (si no está corriendo)
echo Verificando Docker Desktop...
start "" "C:\Program Files\Docker\Docker\Docker Desktop.exe"
timeout /t 15 /nobreak

REM Navegar al proyecto y levantar contenedores
cd /d D:\Proyectos\HotelOverlook
docker-compose up -d

echo Esperando que los servicios se inicialicen...
timeout /t 10 /nobreak

echo.
echo ✅ Hotel Overlook iniciado correctamente!
echo.
echo 📍 Aplicación: http://localhost:8080
echo 📍 pgAdmin: http://localhost:5050
echo.
echo Credenciales:
echo - manager@hoteloverlook.com / manager123
echo - pgAdmin: admin@hoteloverlook.com / admin123
echo.
pause