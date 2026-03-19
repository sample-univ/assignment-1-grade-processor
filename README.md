# Assignment 1: Student Grade Processor

Welcome to your first assessment! In this assignment, you will build a PHP class to process student grades.

## Objective
Implement the `GradeProcessor` class in `src/GradeProcessor.php`. You are required to implement three methods to calculate averages, assign letter grades, and identify top performers.

## Requirements

1. **`calculateAverage(array $scores): float`**
   - Takes an array of numeric scores.
   - Returns the average of all scores.
   - If the array is empty, it should return `0.0`.

2. **`assignLetterGrade(float $score): string`**
   - Converts a numeric score into a letter grade based on the following logic:
     - 90 and above: `A`
     - 80 to 89.99: `B`
     - 70 to 79.99: `C`
     - 60 to 69.99: `D`
     - Below 60: `F`

3. **`getTopStudents(array $students, float $threshold): array`**
   - Takes an associative array of students `['StudentName' => score, ...]` and a threshold score.
   - Returns an array consisting ONLY of the names of students who scored strictly **greater than or equal to** the `threshold`.

## Running Tests
This repository comes with automated tests to check your work.
To see if your code passes, run the following in your Codespace terminal:
```bash
./vendor/bin/phpunit tests
```
Do not modify the files inside the `tests/` directory. Use them as a guide to understand what is expected!
