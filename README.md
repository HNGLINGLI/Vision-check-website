# Vision Check Website

A web application designed to facilitate vision testing and result tracking, allowing both students and teachers to manage and view vision test data efficiently.

## Features

### Student Interface
- **User Authentication**: A secure login page requiring a username and password.
- **Vision Check Chart**: Displays vision test results as a chart, with options to view results for the left eye, right eye, or both.
- **Basic Student Information**: Displays essential details about the student alongside their vision test results.

### Teacher Interface
- **Data Retrieval**: Automatically fetches the latest vision test data from ThingSpeak.
- **Data Table**: Presents a sortable table of all the most updated vision test results.
- **Data Management**:
  - **Range Filtering**: Filter data based on specific ranges.
  - **Export Options**: Export data in multiple formats (PDF, Excel, CSV).
  - **Copy and Print**: Easily copy or print the displayed data.

## Data Management
All vision test results are uploaded to ThingSpeak, ensuring real-time data accessibility and updates for both students and teachers.

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP
- **Data Storage**: ThingSpeak API for data management

git clone https://github.com/hnglingli/vision-check-website.git
