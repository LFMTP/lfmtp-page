# LFMTP 2024

**July 8, Tallinn, Estonia, associated with FSCD at [FSCD/LiCS/ICALP 2024](https://compose.ioc.ee/icalp2024/)**

## Scope

Logical frameworks and meta-languages form a common substrate for
representing, implementing and reasoning about a wide variety of
deductive systems of interest in logic and computer science. Their
design, implementation and their use in reasoning tasks, ranging from
the correctness of software to the properties of formal systems,
have been the focus of considerable research over the last two decades.
This workshop will bring together designers, implementors and
practitioners to discuss various aspects impinging on the structure and
utility of logical frameworks, including the treatment of variable
binding, inductive and co-inductive reasoning techniques and the
expressiveness and lucidity of the reasoning process.

LFMTP 2024 will provide researchers a forum to present state-of-the-art
techniques and discuss progress in areas such as the following:

- Design, Analysis, Implementation, Evaluation, and Application of logical frameworks like LF, Abella, Beluga, ELPI, Hybrid, lambdaPi, or MMT
- Encoding and reasoning about the theory of programming languages, logical systems, type theories, and similar formal systems
- Theoretical and practical issues concerning the treatment of variable binding such as higher-order abstract syntax, nominal logic, explicit substituations, or binding signatures
- Representation and reasoning about features of logics and languages like equality, inductive and co-inductive definitions, inductive types of higher dimension, universes, as well as associated reasoning techniques
- Frontiers of logical frameworks such as canonical and substructural frameworks, contextual frameworks, functional programming over logical frameworks, or homotopy and cubical type theory
- Logical framework-based tools and services such as theorem proving, search tools, or IDEs
- Two-level languages to program and reason over logics like tactic languages, reflection, or meta-programming in interactive provers such as LTac, ELPI, MetaCoq, Isabelle, and Lean's meta-programming), including implementation and use cases
- Graphical languages for building proofs, applications in geometry, equational reasoning and category theory.

## Invited Speakers

**Carsten Schürmann: Nominal State Separating Proofs**

The goal of this work is to mechanize the security proofs of cryptographic algorithms. The definition of security is expressed in terms of a game pair capturing the indistinguishability between real and ideal functionality. A security proof is then expressed as a sequence of game hops between these games.  When mechanizing security proofs using modules (see Brzuska et al. s work on state separating proofs), which introduce sets of module-specific global state variables, compositionality becomes an issue, because two modules may use the same state variable names. Thus, state-variables must be renamed when composing modules as was already observed in.

In my talk, I demonstrate how the theory of nominal sets can be used to solve this problem by introducing a notion of separated module composition that ensures separation of state-variables by applying permutations of names. Separation is defined constructively, so that it can be easily represented in a proof assistant, such as Coq or Lean. I show that alpha-equivalence implies perfect indistinguishability and that game-hopping through intermediate modules that introduce additional state-variables does not complicate the formulation of security theorems.

This is joint work with Markus Krabbe Larsen.

## Program

|Time | Authors | Topic |
|-----| ------- | ----- |
| 9:00| Carsten Schürmann | Nominal State Separating Proofs |
|10:00| coffee break |
|10:30| Thomas Traversié | Kuroda for Higher-Order Logic in the lambdaPi-Calculus Modulo Theory |
|11:15| Rishikesh Vaishnav | A Term-Patching Framework for Eliminating Definitional Equalities in Lean |
|12:00| lunch break |
|14:00| Thomas Traversié | Proofs for Free in the lambdaPi-Calculus Modulo Theory |
|14:45| Gabriele Cecilia and Alberto Momigliano	| A Beluga Formalization of the Harmony Lemma in the pi-Calculus |
|15:30| coffee break |
|16:00| Terrance Gray, Gopalan Nadathur | Binding Contexts as Partitionable Multisets in Abella
|16:45| Florian Guthmann, Philip Kaludercic, Johannes Lindner, Tadeusz Litak	| Abella2Coq: Translating Abella Specifications into Coq |

## Important Dates

- Abstract submission deadline: April 29 EXTENDED to May  6
- Paper submission deadline:    May    6 EXTENDED to May 13
- Notification to authors:      June   3
- Final version due:            June  13
- Workshop:                     July   8


## Submission [Call for Papers](https://lfmtp.github.io/lfmtp-page/workshops/2024/CFP.txt)

We solicit regular papers of up to 15 pages (including references).
These must be original and not simultaneously submitted to another venue.
They will be reviewed, and we plan to publish (pre- or post-)proceedings in a series like EPTCS or similar.

In addition, we encourage the submission of abstracts (1-4 pages including references) describing work-in-progress, new ideas, challenges, or other interesting informal contributions.

All submitted papers should be in PDF format following the [EPTCS style](https://info.eptcs.org/).

Submissions should be made via [EasyChair](https://easychair.org/conferences/?conf=lfmtp24).

We will investigate the possibility of having a journal special issue for extended versions of selected contributions.

## Program Committee

- Florian Rabe (University of Erlangen-Nuremberg, Germany), co-chair
- Claudio Sacerdoti Coen (University of Bologna, Italy), co-chair
- Mauricio Ayala-Rincón (University of Brasilia)
- Mario Carneiro (Carnegie Mellon University)
- Kaustuv Chaudhuri (Inria Saclay)
- Cyril Cohen (Inria Sophia Antipolis)
- Alberto Momigliano (University of Milan, Italy)
- Colin Rothgang (IMDEA, Madrid)
- Sophie Tourret (Inria Nancy & Loria)
- Theo Winterhalter (Inria Saclay)
- other members TBA 
