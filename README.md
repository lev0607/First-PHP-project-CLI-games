[![Build Status](https://travis-ci.org/lev0607/php-project-lvl1.svg?branch=master)](https://travis-ci.org/lev0607/php-project-lvl1)
[![Code Climate](https://codeclimate.com/github/lev0607/php-project-lvl1/badges/gpa.svg)](https://codeclimate.com/github/lev0607/php-project-lvl1)
[![Issue Count](https://codeclimate.com/github/lev0607/php-project-lvl1/badges/issue_count.svg)](https://codeclimate.com/github/lev0607/php-project-lvl1)

# Первый учебный проект
Набор из пяти консольных мини игр. Игра задает вопрос. После трех правильных ответов считается, что игра пройдена. Неправильные ответы завершают игру и предлагают пройти ее заново.
#### Игры:
* Калькулятор. Поддерживает арифметические выражения ####.
* Прогрессия. Поиск пропущенных чисел в последовательности чисел.
* Определение четного числа.
* Определение наибольшего общего делителя.
* Определение простого числа.

Пример игры:
```
$ brain-progression
Welcome to the Brain Game!
What number is missing in this progression?
May I have your name? Roman
Hello, Roman!
Question: 14 .. 18 20 22 24 26 28
Your answer: 16 # Пользователь вводит ответ
Correct!
Question: 5 6 7 8 9 .. 11 12
Your answer: 10 # Пользователь вводит ответ
Correct!
Question: 12 15 18 21 .. 27 30 33
Your answer: 24 # Пользователь вводит ответ
Correct!
Congratulations, Roman!
```
### Install all games

1. `composer global require lev/php-project-lvl1:dev-master`

[![asciicast](https://asciinema.org/a/fw7afV21ceoMcOghU7uFLszCq.svg)](https://asciinema.org/a/fw7afV21ceoMcOghU7uFLszCq)

### Run game

1. `brain-even`

[![asciicast](https://asciinema.org/a/N87WNLC6SxovldGHAzQavSB5q.svg)](https://asciinema.org/a/N87WNLC6SxovldGHAzQavSB5q)

2. `brain-calc`

[![asciicast](https://asciinema.org/a/wM30WkVZTJmp1swSTcfSikmkU.svg)](https://asciinema.org/a/wM30WkVZTJmp1swSTcfSikmkU)

3. `brain-gcd`

[![asciicast](https://asciinema.org/a/XSBijL3kl8DbLOLlBk3hlb0wQ.svg)](https://asciinema.org/a/XSBijL3kl8DbLOLlBk3hlb0wQ)

4. `brain-progression`

[![asciicast](https://asciinema.org/a/K51cosFa2okZMgOYD73EVrXkW.svg)](https://asciinema.org/a/K51cosFa2okZMgOYD73EVrXkW)

5. `brain-prime`

[![asciicast](https://asciinema.org/a/VSW7JHWQBTPXk9tXe7kdBbTbw.svg)](https://asciinema.org/a/VSW7JHWQBTPXk9tXe7kdBbTbw)