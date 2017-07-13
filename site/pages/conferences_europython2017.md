
[TOC]


# 20170713 Thursday EuroPython Rimini


## 10:30-11:15 Type Annotations in Python 3: Whats, whys & wows!

https://ep2017.europython.eu/conference/talks/type-annotations-in-python-3-whats-whys-wows

Andreas Dewes

- Gradual typing, where you add annotations to code where it makes sense (so you don't have to rewrite your complete codebase)
- Function annotations were the first step in Python 3.0 in 2006 (PEP 3107)
- In 3.5 Type Hints were introduced (including the theory and such)
- Python interpreter stores those annotations in __annotations__ and ignores it otherwise
- External tools like mypy and pycharm do the heavy lifting
- Deliberate choice to do it like this, so it can evolve; eventually we might want to have internal tools
- We loose Python 2 compatibility though, but then we can use type comments, which are backported to 2.7
- Third approach is stub files, ending with .pyi, which mypy will also look at, ignoring the .py file for type checking. This way, we can add only the annotations there. Feels a bit like writing a header file.
- Check the documentation of the typing module for more info, lots of usecases (new in 3.5)
- Slideshare: https://slideshare.com/japh44 -> https://www.slideshare.net/japh44/type-annotations-in-python-whats-whys-and-wows



## 11:20-12:05 Inside Airbnb: Visualizing data that includes geographic locations

https://ep2017.europython.eu/conference/talks/inside-airbnb-visualizing-data-that-includes-geographic-locations

Guillem Duran Ballester

- https://github.com/Guillem-db/Inside-Airbnb-EP17
- insideairbnb
- bokeh is a great library to work with Google Maps
- lat & lon, zoom and map_type
- shaolin for colour maps
- shapefiles with shapely
- holoviews and geoviews (matplotlib, bokeh and shapely as backends)
- datashader: plotting big data made easy; lots of jupyter notebooks as examples
- dynamic=True will recalculate the bins that datashader makes, making it nicer to look at when zooming in (with dynspread/datashade)
- one of the downsides of datashader is that when tweaking, it errors until you get everything right (for example in jupyter)
- http://geo.holoviews.org/Working_with_Bokeh.html
- integrating openstreetmaps with bokeh should be possible, speaker needs to look into it (but Google Maps is default)
- https://github.com/dsolanno/BarcelonaRentsStatus


## 12:10-12:55 Introduction to Nonparametric Bayesian Models

https://ep2017.europython.eu/conference/talks/introduction-to-non-parametric-models

Omar Gutiérrez

Some people just can't present. Seemed like an interesting subject, but could not concentrate on his really quiet rambling talk, instead playing with the Jupyter notebooks from the previous talks



## 14:00-14:30 An introduction to PyTorch & Autograd

https://ep2017.europython.eu/conference/talks/an-introduction-to-pytorch-autograd

Paul O'Grady

- tensor (ndarray) operations on the GPU (instead of being constrained to CPUs)
- pytorch is the new kid on the block
- follows Lua torch, with same underlying C libraries
- it's a define-by-run framework as opposed to define-and-run, leads to dynamic computation graphs, looks more Pythonic
- the native data format is tensors
- supports in-place adds and such (.add_() )
- Torch plays well with numpy and it can bridge back and forth (for example having matrix operations and getting a tensor back)
- you can reshape tensors using views
- tensor computation can be moved to and from GPU (CUDA)
- variables through torch.autograd package
-



## 14:35-15:05 Developing elegant workflows in Python code with Apache Airflow

https://ep2017.europython.eu/conference/talks/developing-elegant-workflows-in-python-code-with-apache-airflow

Michał Karzyński

- definition of a workflow:
  - sequence of tasks
  - started on a schedule or triggered by an event
  - frequently used to handle big data processing pipelines
- Apache Airflow is Open Source, based on Flask, using Celery
- A flow is a Directed Acyclic Graph (DAG)
- Operator is a single task, which can be retried automatically, should be idempotent and is a Python task with an execute method
- xcom is a means of communication between task instances
  - saved in database as a pickled object
  - best suited for small objects
- Introductory Airflow tutorial on speaker's weblog: http://michal.karzynski.pl/blog/2017/03/19/developing-workflows-with-apache-airflow/


## 15:45-16:15 Inspect (Or Gadget)

https://ep2017.europython.eu/conference/talks/inspect-or-gadget

Hugues Lerebours , Renaud Bauvin

- library: inspect, https://docs.python.org/3/library/inspect.html
- provides quite some extra functions apart from the already useful Python buildins
- demo consists of a piece of code that checks if docstrings are up-to-date, also validating against documented types


## 16:20-16:50 Fixture factories for faster end-to-end tests

https://ep2017.europython.eu/conference/talks/fixture-factories-for-faster-end-to-end-tests

Stephan Jaensch

- end-to-end integration, replicating production as much as possible (above 'regular' integration tests)
- slow, most expensive tests
- pyramid, swagger, openapi, sqlalchemy
- lots of db setup on all the components, lots of SQL scripts, hard to write, maintain
- taking inspiration from Django
- make sure data is logically correct
- pytest
- why not use models? No FK checking used in this setup, so cannot use the PK and FK's
- helps with test repeatability, as it eliminates dependability between tests (order)
- use fixture factories for faster development and more correct test data
- convert tests for test isolation and repeatability
- take advantage of it by executing tests in parallel
- https://github.com/sjaensch/faster_end_to_end_tests_talk




# 20170712 Wednesday EuroPython Rimini

## 09:00-10:00 If Ethics is not None

https://ep2017.europython.eu/conference/talks/if-ethics-is-not-none

Katharine Jarmul

(photo)

Lots of good thoughts.

Copied and typed some to:
https://dammit.nl/computer-ethics-quotes.html

https://books.google.it/books?id=NnM-uISyywAC&lpg=PA27&ots=xgTxeBeiHn&dq=wiener%20It%20may%20very%20well%20be%20a%20good%20thing%20for%20humanity&pg=PA27#v=onepage&q&f=false



## 10:30-11:15 Mary had a little lambda

https://ep2017.europython.eu/conference/talks/mary-had-a-little-lambda

Anjana Vakil

- lambda calculus, of course invented by Alonzo Church, starting in 1932
- fun talk about doing lambda calculus, Church Numerals and Encoding, corresponding arithmetic in Python
- feels like being at the university again, but a lot more fun, great talk by an energetic Anjana


## 12:10-12:40 Teeing up Python: Code Golf

https://ep2017.europython.eu/conference/talks/teeing-up-python-code-golf

Lee Sheng

(really would like to have the slides)

- try using a default: to_mail = my_contact.get("address", "UNKNOWN") (instead of checking if a key exists and then getting it from the list)


## Lunch



## 15:45-16:15 Realtime Distributed Computing At Scale (in pure Python!): Storm And Streamparse

https://ep2017.europython.eu/conference/talks/realtime-distributed-computing-at-scale-in-pure-python-storm-and-streamparse

Alexander Lourenco

- Parse.ly
- Storm is a distributed real-time computation system, which simplifies workers and queues.
- Streamparse is Pythonic Storm
- Nimbus and Storm UI
- Install Storm env from Apache Storm site
- pip install streamparse
- sparse quickstart
- sparse run



## 16:20-16:50 Infrastructure design patterns with Python, Buildbot, and Linux Containers

https://ep2017.europython.eu/conference/talks/infrastructure-design-patterns-with-python-buildbot-and-linux-containers

David Liu

- Dask (distributed task system)
- buildbot

Abuse all the tools :)

Better could have gone to:

## 16:20-16:50 How to make money with your Python Open-Source Project

https://ep2017.europython.eu/conference/talks/how-to-make-money-with-your-python-open-source-project

Max Tepkeev

(skipped, but would've been better)



## 17:00-18:00 Lightning talks



## Various

Visual debugger: pudb

Came for the language, stayed for the community.




# 20170711 Tuesday EuroPython Rimini

## 09:00-10:00 How to create inspiring data visualizations?

https://ep2017.europython.eu/conference/talks/how-to-create-inspiring-data-visualizations

Jan Willem Tulp

(pictures)

Really interesting ways of visualising a collection of archives of architectural data. Also star maps generated for ESA and an overview of all trees on earth.


## 10:30-11:15 Write more decorators (and fewer classes)

https://ep2017.europython.eu/conference/talks/write-more-decorators-and-fewer-classes

Antonio Verardi

(pictures)

Stop writing classes: https://www.youtube.com/watch?v=o9pEzgHorH0

Decorators are rather easy to use, but can be hard to write. In concept though, they are simple.


## 11:20-12:05 Abstract Base Classes: a smart use of metaclasses

https://ep2017.europython.eu/conference/talks/abstract-base-classes-a-smart-use-of-metaclasses

Leonardo Giordani

(pictures)

- Test behaviour, not structure.
- Checking the type (isinstance and such) is also not really the intention, also because some object or class can behave like a certain class, but is of course not exactly that implementation/type you are checking.
- Perfect solution: if behaveslike(someobj, ListBehaviour):
- Python is based on delegation, which is good news; magic functions come into play
- Collections, classes that represent interesting behaviours (go check them)
- Subclasses
- Virtual subclasses: ParentClass.register(ChildClass), with opposite relationship, where the ParentClass knows the ChildClass, but not the other way arround
- Registering is a promise, no check done
- Abstract base classes are categories (like labels/tags, but it's just a promise)
- A metaclass can put things into the class that is linked to it
- Decorators can be inherited, but metaclasses are more powerful as metaclasses are inherited (eh)
- You can abstract base classes to build interfaces, but in his opinion this is not the way to go. Can be useful though.



## 12:10-12:40 Why you don't need design patterns in Python?

https://ep2017.europython.eu/conference/talks/why-you-dont-need-design-patterns-in-python

Sebastian Buczyński

- The weight of a project outside of a framework, missing the building blocks
- Java: design patterns! (general reusable solution to a commonly occurring problem; formalised best practices; just outlines though, not ready to use)
- Singletons in python? Modules!
- Visitor pattern: ASTs (abstract syntax trees, linters use those)
- Decorator patterns (not the @decorator in python)
- Is magic worth the effort? It depends, readability wins.
- Know your tools well, get inspiration from other languages and communities, know the business domain of your project


## Lunch


## 14:00-14:30 There should be one obvious way to bring python into production

https://ep2017.europython.eu/conference/talks/there-should-be-one-obvious-way-to-bring-python-into-production

Sebastian Neubauer

(pictures)

- Delivery pipeline
- Versions should be really unique, preferably signed
- Nice to have: upload to an artifact repository
- Testing: the tests test the test env, not production (e.g., pytest pulls in $package that turns out to be missing when deploying to production)
- Reproducible conditions, near-production-like conditions
- Staging/QA has the risk of being an outdated, manually maintained setup
- Production: all kinds of restrictions (see photo)
- Nice to haves (see photo); automated deploy, monitoring, self-healing, rolling update and roll back
- Dependency hell (photo)
- Python package management
  - Still much confusion around setuptools, distutils, eggs and such
  - Many outdated 'best practices' on StackOverflow etc
  - pyscaffold, versioneer (templates for packages)
- Nix inside a container?


## 14:35-15:05 Feeding a real-time user interface

https://ep2017.europython.eu/conference/talks/feeding-a-real-time-user-interface

Vita Smid

- Stock trading platform
- All back-end code Python 3.5/3.6
- They are using React, websockets
- Take 1: Naive snapshots, call all get_state methods periodically, encoding their return values in JSON and send them to the clients
- Diffing snapshots, get_state methods now sends the incremental updates instead, remembering the last state
- difflib (included in python, great tool)
- Difficult, because newly connected clients still have to get a snapshot, also might be doing a lot of unnecessary work in your get_state methods
- Producers should have a has_changed flag
- difflib only works with sequences of hashable items (no nested dictionaries or something, tuples of dictionaries)
- For small sequences it's faster to just send a snapshot
- Take 3: Generating diffs on every state write, no longer black box, but you have to keep track of the changes you did; basically a journal
- difftrack: github.com/qntln/difftrack
  - snapshots are automatically supported (.get_snapshot())]
  - the listener forgets old diffs after requests (.get_new_diffs() then is empty)
  - you can also track dictionary diffs
  - you can compact diffs that cancel each other out (so on request, there is even nothing to tell) (coming soon)
  - you can squash (aggregate) diffs affecting subsequent indices
- Beyond diffs: consider using a custom binary protocol to send updates to clients
- Apache Avro to encode payloads
- Each message type has a schema which also serves as documentation


dictdiff



## 15:45-16:15 Django: From a nightmare to a dream with Best Practices.

https://ep2017.europython.eu/conference/talks/django-from-a-nightmare-to-a-dream-with-best-practices

Stephane Wirtel

(skipped)


## 15:45-16:15 Discovering Descriptors

https://ep2017.europython.eu/conference/talks/discovering-descriptors

Mariano Anaya

(photos)

- python 3.6
- __get__


https://www.blog.pythonlibrary.org/2016/06/10/python-201-what-are-descriptors/


## 16:20-16:50 Django and Graphql

https://ep2017.europython.eu/conference/talks/django-and-graphql

Patrick Arminio

(photos)

- pip install graphene
- pip install graphene-django
- authentication
- permission per field
- does not work nicely together with DjangoRestFramework yet
- limit the nesting you can have, it can get rather deep otherwise (long queries and such), GitHub does something like that
- Facebook created Relay for React
- Apollo is another frontend toolkit - https://github.com/apollographql


## 17:00-18:00 Lightning talks

Reporting security issues: if someone reports to you, take it seriously. Create a howto in your README too.

If reporting yourself, do it privately, you might take someone off guard, also possibly endanger users.


Don't document your experiences for others, experience your vacations and such for yourself (you can still take pictures and souvenirs, but do it for yourself).


gitmate.io
gitmate-bot
coala
IGitt (an exclamation of disgust)
Interface for Git{Hub|Lab}
https://gitlab.com/gitmate/open-source/IGitt


Quickly create/publish packages on pypi: flit
https://pypi.python.org/pypi/flit
https://pypi.org/


dothub
sealed mock: mock.sealed = True  # from now on, no new attributes can be declared


tests: use aioresponses (when doing requests in asynchronous io)


1 - Thank you for moving the elephant to the middle of the room.
2 - Don't mention it.







# 20170710 Monday EuroPython Rimini

## 09:15-10:00 Keynote

Armin Ronacher

UTF-8 and beyond, careful with slicing, no subclassing of dictionaries


## 10:15-13:15 Django & Celery - frequently used patterns

R. Georgiev

- chains: first this, then that
- groups: parallel
- http://docs.celeryproject.org/en/latest/userguide/canvas.html
- Immutable signatures (when you don't want to do explicit variable passing)
- Chords in rabbitmq apparently are working badly, using Redis might help there
  - Or have some task fetch all the results yourself

- celery -A run_python_run worker -E --loglevel=info
  - -E celery events, makes flower possible
  - getting started with Django documentation from Celery

- when writing a reusable app, instead of @app.task, use @shared_task(bind=True)


## 12:10-12:30 But how do you know your mock is valid? Verified fakes of web services

A. Dangoor

(pictures)

- Vuforia for image matching
- requests-mock
- vws-python, coming to pypi soon
- travis CI
- mock rewritten als a Flask app, translating requests-mock to something that can be used

- tests run twice, once with the real Vuforia, once with the mock, checking if the mock has the same results
- tests tell us if the mock is outdated (if the remote API changes)
- scheduled tests with travis CI cron jobs, not only when they are run manually (after changes)
- verified fakes, quickly seeing when some undocumented change took place, and be able to fix it fast
- if you ship software, ship a verified fake with it (adds value to your product). People can then use that to create their tests


Something else, "->" in function definitions:

https://stackoverflow.com/questions/14379753/what-does-mean-in-python-function-definitions


## 12:10-12:30 Django Rest Framework, one year after: tips, tools, tricks and pitfalls.

A. Castillo

(skipped)


## 12:45-14:00 Lunch


## 14:00-14:30 Debugging in Python 3.6: Better, Faster, Stronger

https://github.com/krother/debugging_tutorial

(skipped)

## 14:00-15:30 AsyncIO for beginners

## 14:00-17:00 Faster Python Programs - Measure, don't Guess

Mike Müller

(pictures, pdf's)

http://www.python-academy.com/download/europython2017/

- premature optimisation is the root of all evil (D. Knuth or C.A.R Hoare or folklore)
- profiling cpu usage
- pip install jupyter
- useful (default) python library: timeit (import timeit) https://docs.python.org/2/library/timeit.html
- timeit.default_timer (not os_time, time_clock)
- snakeviz
  SnakeViz is a browser based graphical viewer for the output of Python's cProfile module.
- `snakeviz` or use it as module: `python -m snakeviz`
- python -m cProfile -o pi.stats simple_pi.py
- snakeviz pi.stats
- the tool measures itself too, so be aware of that

jupyter:
- load profile_me.py <shift>-<enter>
- %load_ext snakeviz
- %snakeviz test()

- %timeit
- multiline version: %%timeit
- %timeit?

- https://github.com/rkern/line_profiler
- pip install line_profiler
- kernprof (-v)
- line-by-line profiling: -l
- kernprof -v -l profile-me_use_line_profiler.py
- in jupyter: load_ext line_profiler

https://pythonhosted.org/Pympler/

- from pympler import tracker
- t = tracker.SummaryTracker()
- t.print_diff()
- big = list(range(10**6))
- t.print_diff()  # shows how big the datastructure we just created is (as it shows the difference with the previous measurement)

functools: create decorators (like in ./measuring/memory_size_pympler.py: measure_memory
This one creates a decorator the create a measurement of a function, storing it in a variable

matplotlib

import use_mem
%load_ext memory_profiler
%mprun -f use_mem.use_mem use_mem.use_mem(numbers)
(external process, so should be in a file, as the OS is doing the measurements)


n = int(1e4)
sum([x ** 2 for x in range(n)])

try finally, always does the finally before returning, even when there's an exception


## Various

Async Web Apps with Sanic: Flask-like API
