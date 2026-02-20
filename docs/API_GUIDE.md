# API Guide

## Overview
This documentation provides an overview of the API endpoints available for the WebTimer project.

## Base URL
`https://api.webtimer.example.com`

## Endpoints

### 1. Get Current Time
- **Endpoint:** `/current_time`
- **Method:** `GET`
- **Description:** Retrieves the current time in UTC.

### 2. Set Timer
- **Endpoint:** `/set_timer`
- **Method:** `POST`
- **Description:** Sets a timer for a specified duration.
- **Request Body:**
  - `duration`: The duration for the timer in seconds.

### 3. Get Timer Status
- **Endpoint:** `/timer_status`
- **Method:** `GET`
- **Description:** Retrieves the current status of the timer.

## Authentication
This API may require authentication. Ensure to include the necessary API key in the header for secure access.
## Rate Limiting
Be mindful of API rate limits to avoid being restricted.

## Contact
For support, please contact the maintainer.