<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Financeiro - Pagamentos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        table th, table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #333;
            color: white;
        }
        .status-paid {
            color: green;
            font-weight: bold;
        }
        .status-pending {
            color: red;
            font-weight: bold;
        }
        .summary {
            margin-top: 20px;
            text-align: right;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Controle Financeiro - Pagamentos</h1>

        <!-- Tabela de Pagamentos de Entrada -->
        <h2>Pagamentos de Entrada</h2>
        <table>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Cliente</th>
                    <th>Forma de Pagamento</th>
                    <th>Valor</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Pagamento 1 -->
                <tr>
                    <td>10/10/2024</td>
                    <td>João Silva</td>
                    <td>Boleto</td>
                    <td>R$ 200,00</td>
                    <td class="status-paid">Pago</td>
                </tr>
                <!-- Pagamento 2 -->
                <tr>
                    <td>12/10/2024</td>
                    <td>Maria Souza</td>
                    <td>Pix</td>
                    <td>R$ 350,00</td>
                    <td class="status-paid">Pago</td>
                </tr>
                <!-- Pagamento 3 -->
                <tr>
                    <td>15/10/2024</td>
                    <td>Carlos Almeida</td>
                    <td>Boleto</td>
                    <td>R$ 150,00</td>
                    <td class="status-paid">Pago</td>
                </tr>
            </tbody>
        </table>

        <!-- Tabela de Pagamentos Pendentes -->
        <h2>Pagamentos Pendentes</h2>
        <table>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Cliente</th>
                    <th>Forma de Pagamento</th>
                    <th>Valor</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Pagamento 1 -->
                <tr>
                    <td>18/10/2024</td>
                    <td>Ana Costa</td>
                    <td>Pix</td>
                    <td>R$ 400,00</td>
                    <td class="status-pending">Pendente</td>
                </tr>
                <!-- Pagamento 2 -->
                <tr>
                    <td>20/10/2024</td>
                    <td>Lucas Pereira</td>
                    <td>Boleto</td>
                    <td>R$ 250,00</td>
                    <td class="status-pending">Pendente</td>
                </tr>
            </tbody>
        </table>

        <!-- Resumo Financeiro -->
        <div class="summary">
            Total Recebido: R$ 700,00<br>
            Total Pendente: R$ 650,00
        </div>
    </div>

</body>
</html>
