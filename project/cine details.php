<?php
$servername = "localhost";
$tablet = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>




<html>

<li><a href="logout.php">Logout</a></li>
</html>Data Structures and Algorithms - In course Assessment 1
17 January 2017 4.30 - 5.00 PM
Which of the following is wrong about a "data structure"? *
A data structure is a way to store and organise data
Using a data structure makes an algorithm more complex
A data structure facilitates access and modification of stored data
A data structure helps to create better algorithms
Which of the following is wrong about an Algorithm? *
An algorithm is equivalent to a programme in high level programming language
An algorithm is a finite sequence of instructions
Each instruction in an algorithm has a clear meaning
An algorithm should be executable in a finite amount of time with a finite amount of effort
Two main measures for the efficiency of an algorithm are *
Processor and memory
Complexity and capacity
Data and time
Time and space
A better way to determine the efficiency of an algorithm is *
counting the number of statements
finding the time taken when it is executed on a computer
counting the number of key operations
analysing the techniques used in the algorithm
To find the space complexity of an algorithm *
estimate the memory required to store the programme
estimate the space required to store data and temporary space required run the programme
estimate the space required to store the data
estimate the available memory of the computer
The Worst case occur in linear search algorithm when *
the item is in the first location of the array
the item is in the middle of the array
item is at the last location of the array
item is at the last location of the array or not in the array
The order of growth of four algorithms for a problem are given below. Which one is the fastest? *
O(n^2)
O(n log n)
O(2^n)
O(n^3)
Which of the following is the correct descending order for common order of growth functions? *
O(n), O(n log n), O(n^2), O(2^n)
O(n log n), O(n), O(n^2), O(2^n)
O(n log n), O(log n), O(n^2), O(n)
O(n), O(log n), O(2^n), O(n^2)
Consider the part of an algorithm given below. How many times the statement 5 (if statement) would be executed? *
Captionless Image
(n+1)+(n)+(n-1)+(n-2)+.....1
(n-1)+(n-2)+(n-3)+(n-4)+.....1
(n+1)+(n+1)+....(n+1)
(n)+(n-1)+(n-2)+(n-3)+.....1
Consider the part of an algorithm given below. What would be the order of growth of this part of the algorithm? *
Captionless Image
O(n log n)
O(n^2)
O(log n)
O(n)
Quicksort and Mergesort are good example for which of the following algorithm design technique? *
Divide and conqure
Greedy approach
Brute force approach
Recursive approach
Order of growth of Selection sort and Quicksort are? *
O(2^n) and O(n)
O(n^2) and O(n log n)
O(log n) and O(n log n)
O(n log n) and O(n^2)
In algorithm analysis which of the following case does not exist? *
Average case
Best case
Zero case
Worst case
Algorithm A has a time complexity of (2n+1) and algorithm B has time complexity of (n+15). Which of the following statement is wrong about the two algorithms? *
Algorithm A is good for n<15 and B is good for n>14.
Algorithm A has an order of growth of O(2n) and B has an order of growth of O(n)
Algorithm A has an order of growth of O(n)
Algorithm B has an order of growth of O(n)