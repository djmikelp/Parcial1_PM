SELECT case i.lugarresi when 'lp' then 'La Paz'
				  when 'co' then 'Cochabamba'
				  when 'sz' then 'Santa Cruz'
				  else 'otro' end as departamento
                  , COUNT(*) aprobados
FROM notas n ,identificador i
WHERE n.nota>51 and n.ci=i.ci
group by i.lugarresi
