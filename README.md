# Global Ramadan Countdown

[![image alt](https://github.com/hatim-ayyad/ramadan-countdown-api/images/example.png)](https://github.com/hatim-ayyad/ramadan-countdown-api/blob/63eb20e9b54f359afe67b3d2c3e1cc88567fba80/images/example.png)

## Project Overview
A modern and responsive Ramadan Countdown web application that displays the remaining time until Ramadan 1447H (February 18, 2026).  

The application uses PHP to fetch live countdown data from a custom Ramadan Countdown API and JavaScript to update the timer in real-time with smooth animations.

## Quick Start

### Prerequisites
- PHP server (Laragon, XAMPP, WAMP, or any web server with PHP support)
- Internet connection to access the Ramadan Countdown API

### Setup Instructions
1. Place `index.php` and `style.css` in your web server's root directory.
2. Open `index.php`.
3. Make sure the API URL inside `index.php` is correct.
4. Start your PHP server (Laragon/XAMPP).
5. Open the project in your browser.

No API key required if you are using the public Ramadan Countdown API.

## API Used

This project uses the Ramadan Countdown API:

Example response:

```json
{
  "status":"countdown",
  "hijriYear":"1447H",
  "timezoneOffset":8,
  "repository":"https://github.com/hatim-ayyad/ramadan-countdown-api",
  "countdown":{
    "days":4,
    "hours":3,
    "minutes":31,
    "seconds":53
  },
  "targetDate":"2026-02-18T00:00:00.000Z",
  "year":2026
}
