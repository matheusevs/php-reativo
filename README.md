# PHP Reativo: programação assíncrona em tempo real

O curso focou em programação reativa e seus conceitos fundamentais, como observable, que é um tipo que permite reagir a eventos. Embora o ReactPHP não forneça diretamente uma API para isso, ele utiliza promises para lidar com operações assíncronas. Observable é um conceito abstrato importante em programação reativa, que foi mencionado como uma referência para quem quer entender mais sobre o tema.

Foi introduzido também ao conceito de I/O não-bloqueante, onde foi demonstrado como realizar requisições HTTP simultaneamente. Foi discutido que ferramentas como o Guzzle utilizam a extensão cURL para isso, sem empregar programação assíncrona. O curso avançou para a prática com I/O não bloqueante, abordando funções como stream_set_blocking e stream_select, e os desafios envolvidos.

A partir daí, o curso explorou o uso de sockets e o funcionamento básico do HTTP. Foi criado um servidor de socket para entender melhor como o HTTP opera sobre sockets. Em seguida, você aprendeu a usar o ReactPHP, que simplifica a implementação de I/O não bloqueante e streams, comparado à implementação manual.

No final, o curso envolveu um projeto prático, onde foi desenvolvido um chat usando websockets. O cliente usou a API nativa de websocket dos navegadores para se conectar a um servidor criado com Ratchet, que trata mensagens HTTP e websockets.

O curso também ressaltou que a programação reativa pode ser uma forma de escrever código ou uma arquitetura de aplicação, e que pode coexistir com a orientação a objetos. Para dúvidas adicionais, há um fórum e uma comunidade de apoio para ajudar.

---
