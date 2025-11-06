# single-page-shop


**Features**

### UI & Layout
1. **Front-end template setup**
2. **Back-end (Admin Panel) template setup**

### Core Functionality
1. **User CRUD**
2. **Product CRUD**
3. **Customer single-page CRUD using Bootstrap Modal**

### Integrations
1. **DataTables integration**

---

**Requirements**

- PHP **^8.2**
- Laravel **^12.0**
- **Composer**
- **phpMyAdmin**

---

**To Run The Project**

1. Start **Apache** and **MySQL** in **XAMPP**.
2. Create a database named **`test`** in **phpMyAdmin**, and import the **`test.sql`** file from the **`DB`** folder.
3. Clone the project
    ```bash
    git clone https://github.com/talha-51/single-page-shop
    ```
4. Run the following commands one by one:
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan serve
   ```
   Go inside the .env file and change the DB name to **`test`**