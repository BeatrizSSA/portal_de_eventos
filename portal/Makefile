dump:
<<<<<<< HEAD
	mysqldump -u root -p -d extensao_db > db.dump

restore:
	mysql -u root -p -D extensao_db < db.dump
=======
	@mysqldump -u root -pifpe bia > db.dump
restore:
	@mysql -u root -pifpe -D bia < db.dump
commit-db:
	@make dump
	@git add db.dump
	@git commit -m "Atualizando DB"
>>>>>>> 13b84435de22eb59903de08ed9549aa247533a1c
