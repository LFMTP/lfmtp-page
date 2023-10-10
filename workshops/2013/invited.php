<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <title>Logical frameworks and Meta-languages: Theory and Practice (LFMTP'13)</title>
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

<p>This year's invited speaker are
  <a href="http://www.lix.polytechnique.fr/~dale">Dale Miller</a> (Inria),
 <a href="http://users.dimi.uniud.it/~furio.honsell/">Furio Honsell</a> (University of Udine),
and
<a href="http://www.cs.cmu.edu/~rwh">Robert W. Harper<a> (CMU). </p>

  <h2> Foundational Proof Certificates: Making proof universal and permanent<br />
       <a href="http://www.lix.polytechnique.fr/~dale">Dale Miller</a>,
       INRIA-Saclay and LIX/Ecole Polytechnique, France
  </h2>
  <p>
  <b>Abstract</b>:Consider a world where exporting proof evidence into a declarative, universal, and permanent format is taken as ``feature zero'' for computational logic systems. In such a world, provers will be able to communicate and share theorems and proofs; libraries can archive proofs; and marketplaces of proofs would be open to any prover that admits checkable proof evidence. In that world, proof checkers must be entrusted with the task of checking whether or not such proof evidence elaborates into a formal proof using a well defined semantics for proof evidence. An appropriately chosen logical framework can serve as the target for such semantics of proof evidence. I will show that recent developments in structural proof theory can be used to define a foundational approach to proof certificates based on pairing proof evidence with a formal definition of how that evidence can be defined via focused proof systems. Such ``foundational proof certificates'' (FPC) can be used in both classical and intuitionistic logic and with a rich collection of proof structures including, for example, Frege proofs, natural deductions, resolution refutations, and Herbrand disjunctions. I will also argue that λProlog is an appropriate programming language for implementing a checker for FPC (in first-order logic) and for specifying the semantics of proof evidence. While λProlog contains typing, abstract datatypes, and higher-order programming in a style similar to ML---the first programming language designed for implementing proof checkers---it goes beyond ML by providing a logically clean notion of binding and (object-level) substitution as well as backtracking and unification. The latter two programming features are valuable in the FPC setting since proof certificates can leave out detailed but shallow proofs (thus reducing the size of certificates) and unification and backtracking can naturally perform proof reconstruction. I will describe our experiences with a prototype implementation of FPC for first-order logic and the next steps for this project. 
  </p>


  <h2>25 Years of Formal Proof Cultures - some problems, some philosophy, bright future<br />
       <a href="http://users.dimi.uniud.it/~furio.honsell/">Furio Honsell</a>,
       University of Udine, Italy
  </h2>
<p>
<b>Abstract:</b>
Throughout the history of Mathematics several different proof cultures
    have co-existed, and still do co-exist. After 25 years of Logical
    Frameworks, we can say that even as far as proof metalanguages a
    definitive system is utopian and we are witnessing the continuous
    development of a diversity of formal proof cultures (see e.g. the
    Calculus of Constructions, the Edinburgh LF, the Rho-calculus, the
    Concurrent LF, the Pattern LF, the lambdaPi-calculus modulo, the
    Beluga system etc.).  In this paper, we propose a contribution to
    clarifying some controversial issues which have arisen in the
    theory and practice of Logical Frameworks and have possibly
    motivated such a manifold speciation. Using as running example the
    encoding of the critical features of Non-Commutative Linear Logic
    (NCLL) in the Logical Framework LFP, we discuss the notions of
    adequacy of an encoding, locality of a side-condition, deep and
    shallow encodings, and how to embed heterogenous justifications or
    external evidence in LF.  This discussion naturally leads to the
    question of how to express formally the expressive power of
    different Logical Frameworks, a minimal requirement being that of
    encoding itself within itself. We focus on LFP and we discuss its
    relations to the original LF, and briefly to the Conditional LF,
    and the Pattern LF previously introduced by the authors. We
    conclude the paper by briefly comparing LFP to the Linear LF, the
    Concurrent LF, and lambdaPi-calculus modulo.
</p>
<p>This is joint work with L. Liquori and I. Scagnetto</p>


<h2> TBA<br />
  <a href="http://www.cs.cmu.edu/~rwh">Robert W. Harper</a>, Carnegie Mellon University
  </h2>

</div>
<div id="footer">
   <?php echoFile("footer.html"); ?>
</div>

</div>


</body>
</html>
