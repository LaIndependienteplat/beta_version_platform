Use website_test

INSERT INTO users (name, email, phone, birthday, upassword, username , gender, nationality)
VALUES
  ('John Doe', 'john@example.com', '123456789', '1990-05-10', 'password1', 'johnd', 'Male', 'USA'),
  ('Jane Smith', 'jane@example.com', '987654321', '1985-08-15', 'password2', 'janes', 'Female', 'Canada'),
  ('Michael Johnson', 'michael@example.com', '456789123', '1992-02-20', 'password3', 'michaelj', 'Male', 'Australia'),
  ('Emily Davis', 'emily@example.com', '321654987', '1998-12-05', 'password4', 'emilyd', 'Female', 'UK'),
  ('Robert Wilson', 'robert@example.com', '789123456', '1987-07-01', 'password5', 'robertw', 'Male', 'Germany'),
  ('Emma Taylor', 'emma@example.com', '654987321', '1994-04-25', 'password6', 'emmat', 'Female', 'France'),
  ('David Anderson', 'david@example.com', '963852741', '1991-09-12', 'password7', 'davida', 'Male', 'Spain'),
  ('Sophia Martinez', 'sophia@example.com', '852741963', '1989-03-08', 'password8', 'sophiam', 'Female', 'Italy'),
  ('Daniel Brown', 'daniel@example.com', '147258369', '1996-11-17', 'password9', 'danielb', 'Male', 'Japan'),
  ('Olivia Garcia', 'olivia@example.com', '369258147', '1993-06-23', 'password10', 'oliviag', 'Female', 'Brazil');

INSERT INTO user_soft_skills (userId, skill)
VALUES
  (1, 'Communication'),
  (1, 'Teamwork'),
  (1, 'Problem-solving'),
  (2, 'Leadership'),
  (2, 'Time Management'),
  (3, 'Creativity'),
  (4, 'Adaptability'),
  (4, 'Attention to Detail');
 
 
 INSERT INTO user_technical_skills (userId, skill)
VALUES
  (1, 'HTML'),
  (1, 'CSS'),
  (1, 'JavaScript'),
  (2, 'Python'),
  (2, 'SQL'),
  (3, 'Graphic Design'),
  (4, 'Data Analysis'),
  (4, 'Project Management');

 INSERT INTO user_soft_skills (userId, skill)
VALUES
  (2, 'Communication'),
  (2, 'Problem-solving'),
  (3, 'Leadership'),
  (3, 'Time Management'),
  (4, 'Creativity'),
  (4, 'Adaptability'),
  (5, 'Attention to Detail'),
  (5, 'Analytical Thinking'),
  (6, 'Collaboration'),
  (6, 'Organizational Skills'),
  (7, 'Critical Thinking'),
  (7, 'Decision Making'),
  (8, 'Problem-solving'),
  (8, 'Creativity'),
  (9, 'Data Analysis'),
  (9, 'Statistics'),
  (10, 'Communication'),
  (10, 'Teamwork');
 
INSERT INTO user_technical_skills (userId, skill)
VALUES
  (2, 'JavaScript'),
  (2, 'Node.js'),
  (3, 'Java'),
  (3, 'C#'),
  (4, 'Digital Marketing'),
  (4, 'Social Media Management'),
  (5, 'Data Science'),
  (5, 'Machine Learning'),
  (6, 'Web Design'),
  (6, 'UI/UX Design'),
  (7, 'Database Management'),
  (7, 'SQL'),
  (8, 'Web Development'),
  (8, 'PHP'),
  (9, 'Data Visualization'),
  (9, 'Tableau'),
  (10, 'Content Writing'),
  (10, 'Copywriting');
 
INSERT INTO user_crowd_work_platforms (userId, platform)
VALUES
  (1, 'Clickworker'),
  (1, 'MTurk'),
  (1, 'Toloka'),
  (2, 'Toloka'),
  (2, 'Teemwork'),
  (3, 'Teemwork'),
  (3, 'Neevo'),
  (4, 'Remotetaks'),
  (4, 'Hive5'),
  (5, 'Neevo'),
  (5, 'Toloka'),
  (5, 'MTurk'),
  (6, 'Remotetasks'),
  (6, 'Teemwork'),
  (6, 'Usercrowd'),
  (7, 'Neevo'),
  (8, 'MTurk'),
  (8, 'Toloka'),
  (9, 'Clickworker'),
  (9, 'Hive5'),
  (10, 'Toloka'),
  (10, 'Gaing');
  
INSERT INTO user_blog_posts (userId, topic, platform, content)
VALUES
  (1, 'Introduction to Crowdsourcing', 'ToloKa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra ante nec feugiat interdum.'),
  (1, 'Tips for Effective Remote Work', 'Hive5', 'Sed cursus nulla sed tortor maximus, vel condimentum mi aliquam. In sollicitudin orci sed nisl convallis aliquet.'),
  (2, 'The Power of Collaboration', 'Toloka', 'Vestibulum commodo sem ac nisi eleifend facilisis. Sed elementum lorem ut est pharetra elementum.'),
  (2, 'Getting Started with Freelancing', 'Teemwork', 'Praesent consequat tellus nec posuere tempus. Nulla lacinia eleifend elit sed venenatis.'),
  (3, 'Effective Time Management Techniques', 'Teemwork', 'Fusce vehicula nisl vitae mauris tincidunt, non maximus massa finibus. Quisque ullamcorper diam.'),
  (3, 'Mastering the Art of Remote Collaboration', 'Neevo', 'Nam sodales elit sit amet elit semper, ut tempor urna hendrerit. Etiam malesuada felis non leo vestibulum tincidunt.');
 

INSERT INTO users (name, email, phone, birthday, upassword, username , gender, nationality)
VALUES
('Albert Wilson', 'robert.wilson@example.com', '2223334444', '1986-06-12', 'password11', 'robertw', 'Male', 'Brazil'),
('Jennifer Taylor', 'jennifer.taylor@example.com', '9998887777', '1993-04-18', 'password12', 'jennifert', 'Female', 'Spain'),
('Chris Anderson', 'chris.anderson@example.com', '6667778888', '1991-02-15', 'password13', 'chrisa', 'Male', 'Japan'),
('Amanda Lopez', 'amanda.martinez@example.com', '3334445555', '1987-08-30', 'password14', 'amandam', 'Female', 'Mexico'),
('Daniel Clark', 'daniel.clark@example.com', '8889990000', '1997-12-08', 'password15', 'danield', 'Male', 'Italy'),
('Melissa Wilson', 'melissa.wilson@example.com', '2223334444', '1994-10-22', 'password16', 'melissaw', 'Female', 'Sweden'),
('Mark Thompson', 'mark.thompson@example.com', '5556667777', '1989-06-04', 'password17', 'markt', 'Male', 'Netherlands'),
('Laura Garcia', 'laura.garcia@example.com', '7778889999', '1996-05-28', 'password18', 'laurag', 'Female', 'Argentina'),
('James Rodriguez', 'james.rodriguez@example.com', '1112223333', '1992-03-12', 'password19', 'jamesr', 'Male', 'Colombia'),
('Michelle Lee', 'michelle.lee@example.com', '4445556666', '1985-09-26', 'password20', 'michellel', 'Female', 'South Korea');
 
 INSERT INTO user_soft_skills (userId, skill)
VALUES
  (12, 'Communication'),
  (12, 'Creativity'),
  (11, 'Adaptability'),
  (13, 'Time Management'),
  (14, 'Work ethic'),
  (14, 'Interpersonal skills'),
  (15, 'Self motivation'),
  (15, 'Responsabillity'),
  (15, 'Collaboration'),
  (16, 'Flexibility'),
  (17, 'Critical Thinking'),
  (17, 'Negotiation and Conflict Resolution'),
  (18, 'Persuasion'),
  (18, 'Creativity'),
  (19, 'Data Analysis'),
  (19, 'Statistics'),
  (20, 'Organizational'),
  (20, 'Leadership'),
  (20, 'Teamwork');
 
	 INSERT INTO user_technical_skills (userId, skill)
	VALUES
	  (11, 'Python'),
	  (12, 'Civil Law'),
	  (13, 'Medical'),
	  (13, 'Nursery'),
	  (14, 'Digital Marketing'),
	  (14, 'Social Media Management'),
	  (15, 'Chemicals'),
	  (15, 'Pharmacobiology'),
	  (16, 'Professor'),
	  (17, 'UI/UX Design'),
	  (17, 'Database Management'),
	  (17, 'SQL'),
	  (18, 'Ecommerce'),
	  (18, 'Online sales'),
	  (19, 'Data Visualization'),
	  (19, 'Image processing'),
	  (20, 'Content Writing'),
	  (20, 'Poet');
	 
INSERT  INTO crowd_work_platforms (platform_name)
VALUES 
('Toloka'), 
('MTurk'),
('RemoteTasks'),
('Hive5'),
('Teemwork'),
('Clickworker'),
('Others');
	 
INSERT INTO user_blog_posts (userId, topic, platform_id, content)
VALUES
  (1, 'Ganar es fácil', 1, 'Ganar es fácil, muy fácil. Sin embargo, mis fondos no se retiran sin 
	importar cuántas veces sigo las instrucciones y la compañía no tiene forma de ser contactada, 
	lo cual es realmente frustrante. Cree un número de teléfono o correo electrónico por el que uno 
	pueda dirigirse a usted. Gracias'),
  (1, 'Mi experiencia', 2, 'MTurk puede ser una forma fantástica de ganar dinero extra. 
	  También puede ser una experiencia frustrante y degradante. Mi mejor consejo sería buscar 
	  a otros trabajadores en foros, Facebook, IRC, en cualquier lugar donde pueda encontrarlos. 
	  Obtener bastantes consejos. Use complementos y scripts y protéjase de los estafadores.'),
  (2, 'Ganar es posible', 1, 'Personalmente, gano entre 30 y 50 $ todos los días. 
	   Con un poco de esfuerzo sentado en mi PC. Esperar a que aparezcan tareas fáciles y bien 
	   remuneradas es imprescindible. Ser paciente es la única forma de lograr tales ganancias, 
	   no siendo radicalmente un disparate para los honestos.'),
  (4, 'Cuenta bloqueada permanentemente sin motivo', 3, 'Me asignaron el idioma 
	  francés del proyecto bulba e hice las 5 tareas y obtuve la aceptación después de la revisión,
	  y cuando me uní al canal de producción en slack una vez al día, ¡no puedo iniciar sesión en mi
	  cuenta!, y cuando les envío un correo electrónico para saber cuál es la razón, dicen que estoy
 	  usando vpn e inicié sesión con muchas direcciones IP. Estoy muy triste por lo que le está pasando 
	  estos días a este sitio web.'),
  (5, 'Sean cuidadosos', 2, 'Amazon Mechanical Turk es genial si compras en lotes de Amazon 
	   y quieres ganar dinero para tus compras. Sin embargo, realmente debe tener cuidado porque 
	   hay solicitantes que rechazarán su trabajo para que lo hagan de forma gratuita. También hay 
	   muchas estafas allí también.'),
  (5, 'Empresa atroz', 1, 'Chicos, esta es una empresa rusa que intenta explotar la mano de 
	  obra en países supersubdesarrollados pagando menos de un dólar al día por servicios colaborativos 
	  para llenar los vacíos de ML. ¿Qué tipo de reseña esperas? El hecho de que cualquier empresa 
 	  utilice los servicios de Toloka es realmente una atrocidad.'),
  (6, 'El pago por tareas ya es muy', 3, 'El pago de las tareas ya es muy bajo, no es justo 
	   para el tiempo, la electricidad y el wifi que usarás. Sobre todo ya no vale la pena. Incluso 
 	   le paga micro centavos por enviar una tarea en menos de un minuto, por eso puede'),
  (8, 'Personalmente', 2, 'Personalmente, este sitio me ayuda mucho. He ganado un máximo de 8000
	   por mes. Pero estos ingresos se basan en cuánto tiempo pasas en este sitio. Incluso también 
	   obtuve un Hyperwallet de Amazon m Turk. Lo que facilita una transferencia directa de dinero 
  	   a mi cuenta bancaria. He probado muchas plataformas para ganar dinero en línea, pero no hay 
	   un solo sitio web en Internet que pueda competir o estar cerca de MTurk. Amazon MTurk sigue así.'),
   (10, 'Necesitan mejorar su algoritmo de filtrado', 1, 'Las respuestas para una persona de una 
		 región específica pueden diferir de lo que el solicitante/cliente espera que sea. Debido a esta
		 razón, muchas personas no brindan las llamadas respuestas correctas y pasan sus pruebas para ganar
	     las tareas pagas. En cuanto a mí, elijo las tareas que necesitan las habilidades de categorización
  		 de diferentes entidades. De esta manera, gano alrededor de $20 por semana. Aunque no todas las semanas.
		 Recomendaré que lo pruebes si eres una persona promedio honesta, dedicada y de mente aguda. 
		 Porque omitir las tareas conduce a ser expulsado de su plataforma. Además, diría que sería mejor 
		 si intentas aprender algunas habilidades reales como diseño gráfico, codificación, etc. y trabajar 
		 de forma independiente en Fiver, People per Hour y otras plataformas.'),
     (12,'Verificar los valores de atributo en texto',1,'Tuve problemas con esta tarea en el entrenamiento,
     a pesar de elegir la respuesta correcta no me permitia pasarlo, dias despues solucionaron el problema' ),
     (11,'Compare dos productos',1,'Es poco tedioso tener que estar abriendo los links de las páginas 
     donde se vende el producto sería más rápido y más fácil de completar si te muestran una captura de pantalla del sitio'),
     (9,'Evaluar la relevancia de una pagina web para una consulta de usuario',1,'Fue una tarea que resulta fundamental para 
     optimizar los motores de busqueda'),
     (4,'Transcribir el audio',2,'Aunque fue algo complicado de transcribir por el acento que tenían algunos audios, me gustó 
     la tarea. Lo único negativo es que para ese tipo de tareas debido a la complejidad de los acentos, deberían dar un 
     porcentaje de aceptación más considerable porque siempre son entre 80 - 90% y es bastante difícil no equivocarse 
     al menos en uno de los audios cuando en una sola tarea hay muchos.'),
     (4,'Verificar los atributos del texto',2,'Me gusta mucho esta tarea porque paga bien y no es difícil, tiene suficiente 
     tiempo para completarla y hay muchas para realizar'),
     (3,'Tomar fotos de diferente orientación' ,3,'Es una tarea fácil y sencilla de completar, al final no hubo problema con el pago'),
     (2,'Objetos similares 2D',1,'La tarea no es complicada, la interfaz es intuitiva, se tiene que estar concentrado al realizar la tarea.
      Para realizarla se debe ampliar la imagen para ver la coincidencia. Algunas imágenes son demasiado pequeñas y no se puede hallar 
      la coincidencia'),
    (2,'Determinar la relevancia entre dos productos',2,'No tengo ningún problema con esta tarea. A veces hay problemas con algunas imágenes
     pero siempre la puedo completar con éxito.'),
    (11,'Colección de gestos',4,'Hacer fotos de varios gestos con mi cuerpo. Me pareció bien fácil, solo que tardan mucho para aceptar
     o no una foto'),
    (34,'Marca de vehículos, humanos, semáforos, signos de tráfico',1,'esta tarea es en principio complicada por la 
    cantidad de opciones que hay, pero una vez que te familiarizas con la interfaz y los objetos que deben marcarse resulta sencilla.'),
    (36,'Tarea de busqueda de relevancia de Amazon para libros',2,'En esta tarea a veces se indicaba que la categoría era para libros,
     pero daban primero unas instrucciones genéricas y luego cuando estabas realizando la tarea, las instrucciones para libros,
      por lo cual se realizaba a dos veces el trabajo de leer las instrucciones y era confuso.'),
    (35,'La página mostrada es relevante a la pregunta',2,'En general, la tarea está bien estructurada: el tiempo que dan es suficiente,
    las instrucciones son claras y fáciles de entender. Lo que le agregaría, es que también colocarán un apartado con las 
    instrucciones en español, ya que nativos de esa lengua pueden confundirse con alguna traducción y perder algo de porcentaje por esto'),
    (33,'Tarea en idioma ruso',2,'La tarea es facil de realizar pero en determinados momentos las imagenes no coinciden en nada con la 
    descripcion y si coloco esta opcion muy seguido me baja la precision, de todo lo de mas es excelente'),
    (33,'Verificación de objetos de búsqueda' ,3,'Es muy complicado por qué no te dicen que primero debes ver el link sujerido para 
    ver el producto y luego catalogarlo, verían explicar un poco más las instrucciones'),
    (10,'Producto, atributo, valor',1,'facil de comprender de acuerdo a la lectura...para determinar en que estacion se 
    deberian plantar los productos..los temas y descripciones algo extensas de cada uno de ellos'),
    (8,'Investigacion',1,'Toco investigar sobre que todos los tipos de familias que hay y fue muy fácil por 
    ingrese a google y busque tipos de familia y me apareció muchas información fue muy facil'),
    (4,'Aportar preguntas sobre servicios en una plataforma de desarrollo personal'.,1,'Me pareció que la consigna 
    podría ser mejor explicada, porque no entendí que se requería preguntas desde el interés por los servicios que se 
    ofrecían en la plataforma. Yo me puse del lado de los profesionales que aportaban servicios'),
    (4,'Preguntas',2,'El tiempo fue muy corto, logré completarla después de un intento fallido. Esta un poco rara 
    la explicación de la tarea'),
    (4,'Tarea sin pago' ,2,'Fue fácil solo era contestar preguntas y tarde lo justo de tiempo , el pago con el tiempo y 
    valor indicado por toluka'),
    (5,'La página mostrada es relevante a la pregunta',2,'Consiste en comparar un término de búsqueda con la página de un producto y 
    determinar si es relevante. Algunas páginas no cargaban sin VPN, otras no cargaban así usara VPN, lo cual dificultaba mi trabajo.'),
    (6,'Tipos de preguntas o búsqueda',1,'La tarea de ""Tipos de preguntas o búsqueda"", en la plataforma Toloka, consistia en redactar 
    preguntas para diferentes escenarios relacionados con plataformas comunitarias. La tarea me parecio un poco confusa porque 
    los enunciados de los escenarios no eran del todo claros. Sin embargo, utilice la logica y los ejemplos proporcionados 
    y el resultado de la tarea fue exitoso. El tiempo proporcionado fue acorde a la actividad.'),
    (8,'Verificar los valores de los atributos de  Ya.Caleno',3,'La tarea de Verificar los valores de los atributos de Ya.Caleno 
    corregía respuestas que estaban respondidas con la misma opción que ellos daban como correcta, pero te decían que  estaba mal. 
    Luego de intentar un par de veces, porque necesitaba el dinero, la bloqueé.'),
    (19,'Etiquetar spam',4,'Me parece que el trainning es demasiado largo, entiendo que se debe tener cautela al momento de aprender 
    pero no lo logré terminar porque cuando ya iba bien avanzada me sacó de la nada y prácticamente perdí mi tiempo y no lo conseguí'),
    (17,'Tomarse una selfie con gorra',3,'La tarea es realmente fácil, la aplicación hace fácil tomarte una foto directamente y no hubo
     problemas con la paga.'),
    (18,'Realizar mapa conceptual en la plataforma canva',3,'Me pareció sencilla, ya que la plataforma nos provee muchas herramientas 
    para la generación de cualquier material ya sea publicitario o educativo. Creo que el pago es el ideal comparado con todos 
    loz beneficios que se obtiene'),
    (20,'Responder preguntas de la plataforma',1,'En la primera oportunidad fue bastante complicada, puesto a que no sabía cuales 
    eran la plantación de las preguntas que debía hacer, pero el tiempo expiró.. si embargo el la próxima logre el tiempo estimado'),
    (23,'La tarea de grabar video frente al espejo y enviarlo',1,'Creo que exigen mucho tiempo de grabación y por lo tanto se hace 
    muy pesado el archivo al momento de enviarlo y el poco tiempo que te asignan también juega en contra'),
    (23,'Evaluacion Relevancia de Amazon',1,'No logre interpretar el instructivo encontre alguna contardicciones y me resulto 
    dificil completar'),
    (22,'La tarea de gramática',2,'Me parecio genial por qué así pude poner a prueba mis conocimientos y habilidades 
    mentales acerca del tema a tratar además el tiempo es el exacto y perfecto para realizarlo'),
    (22,'Escuchar todo un podcast y definir experiencia',2,'Esta tarea se me hizo muy cansina y el pago la verdad no sé me hizo 
    atractivo. Al vez con un mejor pago, no demasiado porque en si no es tanto pero al menos un pequeño aumento'),
    (6,'Comparar productos',1,'Es una tarea donde debes comparar dos productos distintos ofrecidos en dos plataformas distintos,
     es una tarea facil de realizar pero que necesita atencion, el pago es poco pero una tarea amena de hacer, 
     donde puedes aprender sobre atributos de produtos'),
    (7,'Foto sin maquillaje',1,'Me gustó y me pareció muy sencilla ademas que destacó la importancia de se mujeres al natural'),
    (5,'El lenguaje detectado es correcto',1,'Esta tarea de la plataforma Toloca consistía en verificar el lenguaje correcto en 
    que aparece la consulta. Me pareció excelente el tiempo estaba bien, el pago fue rápido. Pude realizarla con total tranquilidad'), 
    (31,'Prueba para Amazon Libros Evaluación de la relevancia de búsqueda',3,'Esta tarea me gusto, las instrucciones aunque 
    largas fueron muy claras, me costo tiempo terminarla, pero la volvería a realizar');

 