dump:
	@mysqldump -u root -pifpe bia > db.dump
restore:
	@mysql -u root -pifpe -D bia < db.dump
commit-db:
	@make dump
	@git add db.dump
	@git commit -m "Atualizando DB"
