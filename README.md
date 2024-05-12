# Full-Stack Website Project by Guram Sikharulidze

This repository contains the code for a full-stack website developed using HTML, CSS, PHP, JavaScript, and SQL. It features a Stripe payment integration for processing transactions.

-still missing multiple folders to add, its in demo-

## Project Structure

The project is organized into several directories:

- `admin/`: Contains administrative functionalities.
- `components/`: Reusable components used across the website.
- `css/`: Stylesheets for styling the website.
- `images/`: Images used in the website.
- `js/`: JavaScript files for client-side scripting.
- `node_modules/`: Node.js modules (not included in the repository).
- `omnipay-master/`: Payment processing library (not included in the repository).
- `uploaded_img/`: Directory for storing uploaded images (not included in the repository).
- `vendor/`: Composer dependencies (not included in the repository).

Additionally, there are various PHP and Composer files at the root of the `public_html` directory.

## Local Setup

To run this website locally, follow these steps:

1. Install XAMPP or any similar stack that includes PHP and MySQL.
2. Clone the repository or download the zip file and extract it into the `htdocs` directory of XAMPP.
3. Start the Apache and MySQL services using the XAMPP control panel.
4. Import the SQL database file into MySQL through the phpMyAdmin interface.
5. Configure the `.env` file with your environment-specific variables.

## Stripe Payment Gateway

This website uses Stripe for payment processing. To configure Stripe:

1. Sign up for a Stripe account if you don't have one.
2. Obtain your Stripe secret key from the Stripe dashboard.
3. Create a `.env` file in the root directory with the following content: STRIPE_SECRET_KEY=your_secret_key_here
4. Update the `checkout.php` file to use the secret key from the `.env` file.

## Usage

After setting up the project locally, you can access the website by visiting `http://localhost/public_html` in your web browser.

## Contributing

Feel free to fork this repository and submit pull requests to contribute to the project. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is open-sourced under the MIT License. See the LICENSE file for more information.

