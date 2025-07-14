# 📘 CSE Exam Cell Automation Project

This project is developed for the **Computer Science and Engineering Exam Cell** to digitize and automate two major exam workflows:

## 🔧 Features

### 1. **Question Paper Generator**
Located in the `examqp/` directory:
- Uploads a question bank using `upload1.php`, `upload2.php`, `upload3.php`
- Interfaces like `main1.html`, `main2.html` to generate final question papers
- Saves question data in the `uploads/` folder

### 2. **Hall Plan Generator**
Located in the `hall plan generator/` directory:
- Uploads student and hall data via `index1.html`, `index2.html`, etc.
- Processes allocations using `allocate.php`, `merge3.php`, and `generate_attendance.php`
- Generates final seating arrangements and attendance reports
- Stores generated plans in the `finalHallPlan/` and `hallPlans/` folders

---

## 📁 Project Structure

```bash
CseExamcell/
│
├── examqp/
│   ├── main1.html
│   ├── main2.html
│   ├── upload1.php
│   ├── upload2.php
│   ├── upload3.php
│   ├── uploads/
│   └── vendor/
│
├── hall plan generator/
│   ├── index1.html
│   ├── index2.html
│   ├── index3.html
│   ├── allocate.php
│   ├── generate_attendance.php
│   ├── merge3.php
│   ├── finalHallPlan/
│   ├── hallPlans/
│   └── vendor/
│
├── index.php
├── welcome.php
├── styles.css
├── composer.json
├── composer.lock
└── README.md
