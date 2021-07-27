$(function() {

    Morris.Line({
        element: 'morris-area-chart',
        data: [{
            period: '2018-01',
            Recibidas: 56,
            Conciliadas: 4,
            sinconciliar: 8,
            colectiva: 2
        }, {
            period: '2018-02',
            Recibidas: 85,
            Conciliadas: 8,
            sinconciliar: 4,
            colectiva: 4
        }, {
            period: '2018-03',
            Recibidas: 106,
            Conciliadas: 9,
            sinconciliar: 8,
            colectiva: 5
        }, {
            period: '2018-04',
            Recibidas: 180,
            Conciliadas: 12,
            sinconciliar: 6,
            colectiva: 9
        }, {
            period: '2018-05',
            Recibidas: 195,
            Conciliadas: 13,
            sinconciliar: 5,
            colectiva: 4
        }, {
            period: '2018-06',
            Recibidas: 215,
            Conciliadas: 15,
            sinconciliar: 6,
            colectiva: 3
        }, {
            period: '2018-07',
            Recibidas: 260,
            Conciliadas: 20,
            sinconciliar: 1,
            colectiva: 2
        }, {
            period: '2018-08',
            Recibidas: 280,
            Conciliadas: 24,
            sinconciliar: 9,
            colectiva: 8
        }, {
            period: '2018-09',
            Recibidas: 210,
            Conciliadas: 32,
            sinconciliar: 7,
            colectiva: 5
        }, {
            period: '2018-10',
            Recibidas: 180,
            Conciliadas: 40,
            sinconciliar: 5,
            colectiva: 6
        }],
        xkey: 'period',
        ykeys: ['Recibidas', 'Conciliadas', 'sinconciliar', 'colectiva'],
        labels: ['Informe Jurídico', 'Informe Capacitación', 'nf. Reuniones Consultivas', 'Inf. Agencias de Colocación'],
        pointSize: 2,
        hideHover: 'auto',
		fillOpacity: 0.6,
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Informe Jurídico",
            value: 3
        }, {
            label: "Informe Capacitación",
            value: 12
        }, {
            label: "Inf. Reuniones Consultivas",
            value: 3
        }, {
            label: "Inf. Agencias de Colocación",
            value: 2
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2018-01',
            a: 100,
            b: 90
        }, {
            y: '2018-02',
            a: 75,
            b: 65
        }, {
            y: '2018-03',
            a: 50,
            b: 40
        }, {
            y: '2018-04',
            a: 75,
            b: 65
        }, {
            y: '2018-05',
            a: 50,
            b: 40
        }, {
            y: '2018-06',
            a: 75,
            b: 65
        }, {
            y: '2018-07',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Recibidas', 'Conciliadas'],
        hideHover: 'auto',
        resize: true
    });

});
