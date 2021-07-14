set /p new=enter new to add: 

type %~n0.txt | textedit -rl "insert into" -w "insert into dd (some) values (%new%);" | sqlite

pause