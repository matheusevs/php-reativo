<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSocket</title>
</head>
<body>
    
    <output></output>
    <input type="text">

    <script>
        const output = document.querySelector('output');
        const input = document.querySelector('input');

        const ws = new WebSocket('ws://localhost:8002/');

        input.addEventListener('keypress', e => {
            
            if (e.key === 'Enter') {
                const div = document.createElement('div');
                const valorInput = input.value;

                div.textContent = `Eu: ${valorInput}`;
                output.append(div);

                ws.send(valorInput);

                input.value = '';
            }

        });

        ws.addEventListener('message', message => {

            const div = document.createElement('div');
            const valorInput = input.value;

            div.textContent = `Outro: ${message.data}`;
            output.append(div);

        });
    </script>

</body>
</html>