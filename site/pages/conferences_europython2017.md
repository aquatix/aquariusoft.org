
[TOC]


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

- Vuforia for image matching
- requests-mock
-
- (some pictures)
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







# 20170519 PyGrunn, Groningen

## 10:15-10:45 - Polku: Serverless Stream Processing with Python

German Gomez-Herrero (FindHotel BV)

- Infrastructure as code: AWS Cloudformation all the way
- Infrastructure plugins
- https://github.com/humilis/
- https://github.com/FindHotel/analytics-python
- https://github.com/FindHotel/polku-poc
- german@findhotel.net


## 11:00-11:30 - Advanced Django Admin

Laurens Bosscher

- ChangeList (views/main.py), useful with Polymorphic models and for reducing maintenance
- Prefill fields with URL parameters
- Layout customisation
- Enable admindocs


## 11:45-12:15 - Django L10N

Cees van Wieringen

Localisation is the adaptation of a product or content to a specific language or culture.
- translation
- design
- date/time formats
- currency and units of measure

Internationalisation is preparing your product for l10n, a set of tools to enable l10n.
- enabling unicode (python)
- django translation toolkit
- library to convert units of measure

Globalisation is a strategy to place a product in a global market.
- think of politics, business, economics, etc.

G11N > I18N > L10N > T9N

Better not import gettext as underscore, as you then don't know what specific gettext you are using.
- gettext, ugettext, pgettext, gettext_noop, ugettext_noop, ngettext, ungettext, npgettext

Django models:
- TransField
- Currency fields, units of measurement fields (length, size, area, weight etc)


## 13:15-13:45 - All you need is less. Rethinking big data

Berco Beute

- Stop hoarding data
- Make more sense of your data: make it information
- Instead of copying information all over the place (often poorly entered, or with not enough context), *use* the original
- Do this by having smart contracts, that for example let you use a certain piece of information for a certain period of time
  - web11.org
- Article: That time I tried to buy an actual barrel of crude oil, by Tracy Alloway (2015)
- "Given enough bandwidth and low enough latency, copies are not needed" - Telecosm, George Gilder


Frank Zappa:
Data is not information.
Information is not knowledge.
Knowledge is not wisdom.
Wisdom is not truth.
Truth is not beauty.
Beauty is not love.
Love is not music.
Music is THE BEST.


## 14:00-14:30 - Looking at molecules using Python

Jonathan Barnoud

- Jupyter notebooks still rule
-


## 14:45-15:15 - Let's make a GraphQL API in Python

Òscar Vilaplana

- It's basically a REST API re-invented


## 15:45-16:15 - Querying Django models: fabulous & fast filtering

Reinout van Rees

- Lazy evaluation rules
