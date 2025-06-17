# eMall Management

## Overview

E-Mall Management is a web-based platform designed to simulate the management and sales operations of a virtual mall. It provides separate modules for Dress, Food Court, and Furniture shops, each with dedicated admin and sales interfaces. The system supports user authentication, data entry, and sales tracking for each shop.

## Features

- Multi-shop management: Dress, Food Court, Furniture
- Separate admin and sales logins for each shop
- Data entry and sales tracking for each shop
- Responsive and modern UI using Tailwind CSS
- Session-based authentication for secure access
- Modular codebase for easy customization

## Technologies Used

- PHP (Backend logic and session management)
- HTML/CSS (Frontend)
- Tailwind CSS (Styling)
- JavaScript (Interactivity)
- MySQL (Database, see `e_mall.sql`)

## Folder Structure

```
project_EMall/
├── docs/                  # Documentation
├── help/                  # Help and support scripts
├── js-bill/               # Billing-related assets
├── src/                   # CSS and static assets
├── *.php                  # Main PHP modules for each shop
├── *.html                 # Main HTML pages
├── *.js                   # JavaScript files for interactivity
├── *.sql                  # Database schema
└── package.json           # Project metadata
```

## Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Sabeshragav/eMall-Management.git
   ```
2. **Install dependencies:**
   - Ensure you have Node.js, XAMPP, and VS Code (with Live Server extension) installed.
3. **Database setup:**
   - Import `e_mall.sql` into your MySQL server using phpMyAdmin or the MySQL CLI.
4. **Run the project:**
   - Open `e_mall.html` in your browser, or use VS Code Live Server for local development.

## Usage

- Admins and salespersons can log in to their respective modules for Dress, Food Court, and Furniture.
- Data can be added and sales tracked through the provided interfaces.

## Documentation

See `/docs/E-Mall.docx` for detailed documentation.

## License

This project is licensed under the MIT License.

## Contributors

- [Sabeshragav](https://github.com/Sabeshragav)
