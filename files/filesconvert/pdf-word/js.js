function convertirPDF() {
    const pdfInput = document.getElementById('pdfInput');
    const resultadoElement = document.getElementById('resultado');

    if (pdfInput.files.length > 0) {
        const archivoPDF = pdfInput.files[0];
        const apiUrl = '5b1d0482-50eb-4170-88ba-6cddebfa1a51';

        // Crear un objeto FormData para enviar el archivo
        const formData = new FormData();
        formData.append('pdfFile', archivoPDF);

        // Aquí deberías proporcionar la clave de API o cualquier método de autenticación requerido
        const apiKey = '05e82b591912627b41ab5bbbd54b28aa';

        // Realizar la solicitud POST al servicio de conversión
        fetch(apiUrl, {
            method: 'POST',
            body: formData,
            headers: {
                'Authorization': `Bearer ${apiKey}`
            }
        })
        .then(response => {
            // Verificar si la respuesta es exitosa (código 200)
            if (!response.ok) {
                throw new Error(`Error en la solicitud: ${response.status} ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            // Verificar si el servicio devolvió un mensaje
            if (data && data.message) {
                resultadoElement.innerText = data.message;
            } else {
                throw new Error('Respuesta del servicio sin mensaje válido.');
            }
        })
        .catch(error => {
            console.error('Error al realizar la solicitud:', error);
            resultadoElement.innerText = 'Error al realizar la conversión.';
        });
    } else {
        resultadoElement.innerText = 'Por favor, selecciona un archivo PDF.';
    }
}