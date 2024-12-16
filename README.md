🛠️ EventManager Project

A web application built with PHP that allows for event management, including user registration, event scheduling, and admin controls for managing venues, users, and attendees.

🔥 About the Project

The EventManager project is a web-based application written in PHP that facilitates the creation, registration, and management of events. The system distinguishes between regular users and admin users, providing role-based access to features. Admins can manage venues, events, attendees, and users, while regular users can register, log in, and sign up for events.
This project follows the MVC (Model-View-Controller) design pattern, ensuring clean separation between data, logic, and presentation. It also includes a router to manage URL-based navigation and request routing.
The project communicates with a MySQL database (via phpMyAdmin) to store and retrieve user, event, and venue data.

🎉 Features

🚀 User Registration & Login: Allows users to sign up, log in, and manage their account.

🧑‍💼 Admin & User Roles: Admins have special privileges to manage users, events, venues, and attendees.

🗓️ Event Management: Admins can add, edit, and delete events and assign them to specific venues.

📍 Venue Management: Admins can manage venue details and assign them to events.

🎫 User Event Registration: Users can sign up for events directly from the web app.

🧹 MVC Design: Clean separation of the model, view, and controller layers.

🧭 Routing System: Routes incoming requests and dynamically renders views.

🛠️ Tech Stack

Languages:

PHP (Backend logic)

HTML/CSS (Frontend layout and styles)

JavaScript (optional for interactivity and client-side validation)


Frameworks & Libraries:

Custom MVC (Manually implemented, no third-party framework)


Database:

MySQL (via phpMyAdmin) for data storage

Other Tools:

phpMyAdmin (for database management)

XAMPP/WAMP (for local server setup)

📡 Core Functionalities

1️⃣ User Authentication

Registration: New users can create an account with a username, email, and password.

Login/Logout: Users can securely log in to access their dashboard.

Role-Based Access Control:

Regular Users: Can sign up for events and view event details.

Admin Users: Can manage events, users, venues, and attendees.


2️⃣ Event Management

Admin Features:

Add, edit, or delete events.

Link events to specific venues.

View the list of users who have signed up for events.


User Features:

View available events.

Register for events with a single click.


3️⃣ Venue Management

Admins can create, edit, or delete venues.

Each venue has properties like name, location, and capacity.

4️⃣ Attendee Management

Admins can view which users have registered for which events.
