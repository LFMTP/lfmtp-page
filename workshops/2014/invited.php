<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <title>Logical frameworks and Meta-languages: Theory and Practice (LFMTP'14)</title>
   <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<?php include "functions.php"; ?>
<div id="wrapper">
   <?php echoFile("header.html"); ?>

      <div id="menu">
        <ul> 
          <li><a href="index.php">Home</a></li>
          <li><a href="invited.php">Invited talks</a></li> 
          <li><a href="program.php">Program</a></li>          
	</ul>
      </div> 

<div id="main">
 
   <h1>Invited talks</h1>

<p>This year's invited speaker are:
<ul>
  <li><a href="http://www.itu.dk/people/jebe/">Jesper Bengtson</a>(IT University of Copenhagen) </li> 
  <li><a href="http://edwinb.wordpress.com/">Edwin Brady</a> (University of St Andrews)</li>
  <li><a href="http://www-users.cs.umn.edu/~gopalan/">Gopalan Nadathur</a> (University of Minnesota)</li>
</ul>

  
</p>


  <h2>Modular verification of concurrent programs using session types and
       separation logic<br />
<a href="http://www.itu.dk/people/jebe/">Jesper Bengtson</a>(IT University of Copenhagen)
  </h2>
<p>
<b>Abstract:</b>
Session types and separation logic are two leading methodologies for software verification. Session types allow users to write protocols that concurrent programs must adhere to; a session type specifies the order in which messages have to be exchanged, and the types of the data those messages carry. By checking that programs follow compatible session types, we can reason about the ways processes interact, ultimately guaranteeing the absence of deadlocks and race conditions in sessions. Separation logic is an extension of Hoare logic that is typically used to prove full functional correctness of sequential stateful programs; using separation logic, we can write pre- and post-conditions for program statements that use mutable stores such as a heap and modularly verify that they satisfy these specifications. Separation logic is more expressive than session types when it comes to data: with it we can state properties such as "x is a number greater than five", whereas session types can only express that "x is a number". On the other hand, session types offer a powerful means of checking that the communications among concurrent programs do not interfere with each other or deadlock. 
In this talk we describe a merger of session types and a higher-order separation
logic by extending a Java-like programming language with send, receive, and fork
primitives and adding session types to the Hoare logic. We combine the two
methodologies to verify that a system of concurrent programs performs some
communications to reach a common goal, which we define using separation logic
assertions on their respective mutable stores. This allows us to verify programs
like distributed sorting algorithms, where an agent can receive a list and later
send a sorted version of that list. All other commands, such as loops, memory
accesses and function calls are handled using separation logic in the usual
way. We also maintain modular verification, as each agent is individually
verified as if it were a sequential program.
<br>
This is a joint work with Morten Fangel Jensen and Fabrizio Montesi.
</p>


<h2>Idris: Implementing a Dependently Typed Programming Language<br />
    <a href="http://edwinb.wordpress.com/">Edwin Brady</a> (University of St Andrews)
</h2>
<p>
<b>Abstract:</b>
Idris is a purely functional programming language with dependent types.
As well as supporting theorem proving, Idris is intended to be a general
purpose programming language. As such, it provides high-level concepts such as
implicit syntax, type classes and "do" notation.

Many components of a dependently-typed programming language are by now well
understood, for example the underlying type theory, type checking, unification
and evaluation.  How to combine these components into a realistic and usable
high-level language is, however, folklore, discovered anew by successive
language implementors.  In this talk, I will give an overview of the
implementation of Idris, showing how these it brings these components together
into a complete programming language.

I will briefly describe the high-level language and the underlying type theory,
and present a tactic-based method for elaborating concrete high-level syntax
with implicit arguments and type classes into a fully explicit core type
theory. Furthermore, I will show how this method facilitates the
implementation of new high-level language constructs.
</p>



  <h2>A Framework for the Verified Transformation of Functional Programs<br/>
     <a href="http://www-users.cs.umn.edu/~gopalan/">Gopalan Nadathur</a> (University of Minnesota)
  </h2>
  <p>
  <b>Abstract</b>:
The compilation of functional programs relies on transformations that
simplify their structure while ostensibly preserving their
meanings. We argue that the combination of the lambda Prolog language
and the Abella interactive theorem-prover provide a natural framework
for the verified implementation of such transformations. Underlying
this argument is the fact that the transformations are syntax-directed
and rule-based, with the important proviso that they pay attention to
and also modify the binding structure of programs. The logic of
higher-order hereditary Harrop formulas, the HoHH logic for short, is
well-suited to formalizing such descriptions especially because of the
support it provides for the higher-order representation of syntax. By
virtue of the computational interpretation of the HoHH logic embodied
in lambda Prolog, these formalizations become implementations of the
corresponding transformations. The logic that underlies Abella embeds
the HoHH logic and provides a complementary capability for reasoning
flexibly and succinctly about the properties of specifications written
in the HoHH logic. We will consider a typical functional program
transformation and show how these twin capabilities can be exploited
in its verified implementation; we will especially focus on
demonstrating the benefits of a higher-order representation of syntax
in both specification and reasoning. We will also discuss an extension
to the logic underlying Abella for treating logical relations, a
notion that is often needed in semantics preservation arguments.
<br/>
The talk will draw on work done at various times with David Baelde,
Alwen Tiu and Yuting Wang.
  </p>

</div>
<div id="footer">
   <?php echoFile("footer.html"); ?>
</div>

</div>


</body>
</html>
