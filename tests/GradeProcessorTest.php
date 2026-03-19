<?php

namespace Tests;

use App\GradeProcessor;
use PHPUnit\Framework\TestCase;

class GradeProcessorTest extends TestCase
{
    private GradeProcessor $processor;

    protected function setUp(): void
    {
        $this->processor = new GradeProcessor();
    }

    public function testCalculateAverageWithScores()
    {
        $scores = [80, 90, 100];
        $this->assertEquals(90.0, $this->processor->calculateAverage($scores));
    }

    public function testCalculateAverageEmptyArray()
    {
        $this->assertEquals(0.0, $this->processor->calculateAverage([]));
    }

    public function testAssignLetterGrade()
    {
        $this->assertEquals('A', $this->processor->assignLetterGrade(95.5));
        $this->assertEquals('B', $this->processor->assignLetterGrade(80));
        $this->assertEquals('D', $this->processor->assignLetterGrade(65));
        $this->assertEquals('F', $this->processor->assignLetterGrade(59.9));
    }

    public function testGetTopStudents()
    {
        $students = [
            'Alice' => 95,
            'Bob' => 82,
            'Charlie' => 78,
            'Diana' => 90
        ];

        $topStudents = $this->processor->getTopStudents($students, 90);
        $this->assertCount(2, $topStudents);
        $this->assertContains('Alice', $topStudents);
        $this->assertContains('Diana', $topStudents);
        $this->assertNotContains('Bob', $topStudents);
    }
}
