=TEXTJOIN(" | ";1;
	SI(MATERIA>0;
		MATERIA;
		ESPACIOS(IZQUIERDA(CATEDRA;HALLAR("-";CATEDRA)-2))
		);
	SI(DOCENTE <> "";
		DOCENTE;
		TEXTJOIN(" ";1;
			ESPACIOS(MAYUSC(APELLIDO));
			ESPACIOS(NOMPROPIO(NOMBRE))
			)
		);
	JOIN("_"; 		 			JOIN(""; 			 				TEXTO(FECHA;"DD"); 			 				NOMPROPIO(TEXTO(FECHA;"mmm")); 			 				TEXTO(FECHA;"yyyy") 		 				); 		 			TEXTO(FECHA;"HH:mm") 	 			)  		)
https://docs.google.com/spreadsheets/d/e/2PACX-1vQMPQXz4T_bifaWsXBZD8sg4Ff_8bPQe1w4C3ese4XIySmrrtH7yhKtExxNptLt3h4XwwhMr3_l7gBZ/pubhtml?gid=1888340603

https://docs.google.com/spreadsheets/d/e/2PACX-1vRhLH3cExLrxNjFxW-Cj_vrxjzVOAHozm2aNzfBa-DPrsSfrGPr0NxgcaeKFTmpvuk_zjpq3VdND0cJ/pubhtml?gid=343531707&single=true

=TEXTJOIN(" | ";1;MATERIA;GRUPO;TEXTJOIN(", ";1;ESPACIOS(MAYUSC(APELLIDO));ESPACIOS(NOMPROPIO(NOMBRE)))&" "&EMAIL)