# Simple PHP Website with Travel, Architecture, and Nature Photographs

This project is a simple PHP-based website that showcases three sections of photography: **Travel**, **Architecture**, and **Nature**. It also includes **Contact** and **About Me** sections. The website has been designed with Bootstrap for responsive design and smooth user experience, including an automatic image slider. Additionally, a MySQL database has been created to store messages sent by users through the contact form.

## Project Features

### 1. Sections
- **Travel**: A collection of photographs from different travel destinations.
- **Architecture**: Photographs of iconic buildings and architectural structures.
- **Nature**: A gallery of nature and wildlife images.
- **About Me**: A brief introduction about the website owner.
- **Contact**: A contact form where users can send a message, stored in a MySQL database.

### 2. Image Slider
- The photography sections feature an automatic sliding photo gallery created using Bootstrap's carousel component. The slider transitions through featured images smoothly.

### 3. Contact Form with MySQL Integration
- Users can fill out a form in the **Contact** section to reach out. This form submits data to a MySQL database, which stores user information like name, email, and message content.

### 4. Responsive Design
- The website layout adapts to various screen sizes, providing an optimized experience on both desktop and mobile devices.

## Setup Instructions

### 1. Requirements
- PHP 7.x or higher
- MySQL 5.x or higher
- Bootstrap 4.x or higher

### 2. Installation
1. Clone this repository to your local environment:
    ```bash
    git clone https://github.com/yourusername/yourrepository.git
    ```
2. Create a MySQL database and import the `database.sql` file included in the repository to set up the necessary table for contact form submissions.

3. Update the database configuration in the PHP script (e.g., `db_connect.php`) with your database details:
    ```php
    $host = 'localhost';
    $db = 'your_database_name';
    $user = 'your_username';
    $pass = 'your_password';
    ```

4. Run the project on a local server (like XAMPP or WAMP) or upload it to a live server.

### 3. Usage
- Visit the homepage to explore the photograph galleries under **Travel**, **Architecture**, and **Nature**.
- Navigate to the **About Me** section to learn more about the site owner.
- Use the **Contact** form to send messages. Submitted messages are stored in the MySQL database.

## Screenshots
Include screenshots of the output and gallery sections here.

![Travel Section](![Screenshot 2024-09-26 174850](https://github.com/user-attachments/assets/99efa0c5-5dc5-4aeb-8341-604e11d4a641)
)
![Architecture Section](![Screenshot 2024-09-26 174930](https://github.com/user-attachments/assets/6abc994c-2c49-4d1d-be75-37c83c9e1bc2)
)
![Nature Section](![Screenshot 2024-09-26 174916](https://github.com/user-attachments/assets/408877f8-238f-4ddc-97ee-a4636de7ee48)
)
![Contact Section](![Screenshot 2024-09-26 174941](https://github.com/user-attachments/assets/6e38b1c5-7919-4486-9ebd-be09d0180c7e)
)
![Database Section](![Screenshot 2024-09-26 175016](https://github.com/user-attachments/assets/e734795c-4b7f-470c-a652-9248b20b4afa)
)
## Technologies Used
- **PHP**: Backend scripting language
- **MySQL**: Database for storing contact form submissions
- **Bootstrap**: Frontend framework for responsive design and carousel slider
- **HTML/CSS**: For structuring and styling the web pages

