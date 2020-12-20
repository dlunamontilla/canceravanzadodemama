TRANSPILADOR = scss
PARAMETROS = -w -t expanded
RUTA = recursos/activos/sass:vista/css

main:
	${TRANSPILADOR} ${PARAMETROS} ${RUTA} & php -S localhost:1100

transpilar:
	${TRANSPILADOR} ${PARAMETROS} ${RUTA}

servidor:
	php -S localhost:1100
