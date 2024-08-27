# User Management System

This project is a user management system designed as an independent module that can be integrated into a larger web platform. It provides functionalities for user registration, authentication, role management, password management, and activity logging. The system is built with Laravel for the backend and HTML, CSS, and JavaScript for the frontend.

## Features

### Backend
- **User Registration:** Users can sign up with a username, email, and password.
- **User Authentication:** Secure login system using credentials.
- **Role Management:** Assign and manage roles such as Admin, Content Manager, and Client with specific permissions.
- **Password Management:** Users can reset their passwords securely via email verification.
- **Activity Logging:** Logs key user actions for security auditing.
- **Security:** 
  - Password hashing with bcrypt.
  - Input validation and protection against SQL injection.
  - Role-based access control.
  - reCAPTCHA to prevent bot signups.

### Frontend
- **Registration and Login:** User-friendly forms for registration and login.
- **Profile Management:** Users can update their profile information and change their passwords.
- **Admin Panel:** 
  - Manage users (view, edit, delete, assign roles).
  - View user activity logs.
  - Search and filter users by name, email, or role.
- **Styling:** Designed using Bootstrap for responsive and consistent UI.

### Additional Features
- **Account Activation:** Email activation required before accessing the system.
- **Pagination:** Paginated user lists with dynamic loading.

## Project Setup

### Prerequisites
- PHP >= 7.3
- Composer
- MySQL or other supported databases
- Node.js and npm (optional, for frontend tooling)

### Email Configuration

To enable email functionality (e.g., account activation, password reset), configure your email settings in the `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="noreply@yourdomain.com"
MAIL_FROM_NAME="${APP_NAME}"
