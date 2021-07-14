set /p new=enter change: 

type %~n0.txt | textedit -rl "update" -w "update dd set some = '%new%';" | sqlite

pause