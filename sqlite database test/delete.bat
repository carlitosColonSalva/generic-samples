set /p new=delete the ones with: 

type %~n0.txt | textedit -rl "delete" -w "delete from dd where some = '%new%';" | sqlite

pause