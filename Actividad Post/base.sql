CREATE TABLE Empresa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    RazonSocial VARCHAR(255) NOT NULL,
    CorreoElectronico VARCHAR(255) NOT NULL,
    Telefono VARCHAR(20),
    TipoProducto VARCHAR(255)
);