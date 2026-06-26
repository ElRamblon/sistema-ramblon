# Sistema El Ramblón

Sistema web de gestión para restaurante — reservas, membresías y administración con roles.

**Stack:** PHP · MySQL · JavaScript · HTML5 · CSS3

**Proyecto de egreso 3°MC BT — Escuela Técnica El Pinar · UTU · 2026**

## Equipo

| Integrante | Rol |
|---|---|
| Joaquín | Base de Datos & Backend |
| Brandon | Frontend & UX |
| Santiago | Ingeniería de Software & Documentación |
| Federico | Backend & Sociología |
| Marcos | Sistemas Operativos, Ciberseguridad & DevOps |

## Estructura del Proyecto

```text
sistema-ramblon/
├── frontend/
│   ├── html/
│   ├── css/
│   └── js/
├── backend/
│   ├── config/
│   ├── auth/
│   ├── reservas/
│   ├── menu/
│   ├── delivery/
│   └── membresia/
├── database/
├── server/
│   ├── scripts/
│   ├── nftables/
│   └── docs/
└── docs/

## Módulos del sistema

- **Reservas:** los clientes registran, modifican y cancelan reservas de forma autónoma
- **Membresía:** cuenta personal con beneficios diferenciados
- **Administración:** panel con roles (Administrador, Encargado, Personal, Cliente)
