<template>
    <div class="date">
        <div class="date__grid">
            <div class="date__item">
                <span class="date__item--date">{{ day }}</span>
                <span class="date__item--label">D</span>
            </div>
            <div class="date__item">
                <span class="date__item--date">{{ hour }}</span>
                <span class="date__item--label">H</span>
            </div>
            <div class="date__item">
                <span class="date__item--date">{{ minute }}</span>
                <span class="date__item--label">M</span>
            </div>
            <div class="date__item">
                <span class="date__item--date">{{ second }}</span>
                <span class="date__item--label">S</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        date: {
            type: String,
        },
    },
    data() {
        return {
            day: null,
            hour: null,
            minute: null,
            second: null,
            now: null,
        };
    },
    mounted() {
        this.differenceDate(this.date);
    },
    methods: {
        differenceDate() {
            // Crear un objeto Date con la fecha objetivo
            // Separar el día, mes y año de la fecha objetivo
            const partesFecha = this.date.split("/");
            const diaObjetivo = partesFecha[0];
            const mesObjetivo = partesFecha[1];
            const añoObjetivo = partesFecha[2];

            const fechaObjetivo = new Date(
                mesObjetivo + "/" + diaObjetivo + "/" + añoObjetivo
            );

            this.now = fechaObjetivo;
            // Obtener la fecha y hora actual
            const fechaActual = new Date();

            // Calcular la diferencia en milisegundos
            const diferencia = fechaObjetivo.getTime() - fechaActual.getTime();

            // Convertir la diferencia en días, horas, minutos y segundos
            const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
            const horas = Math.floor(
                (diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            const minutos = Math.floor(
                (diferencia % (1000 * 60 * 60)) / (1000 * 60)
            );
            const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);
            this.day = dias > 0 ? dias : 0;
            this.hour = horas > 0 ? horas : 0;
            this.minute = minutos > 0 ? minutos : 0;
            this.second = segundos > 0 ? segundos : 0;
            setInterval(() => {
                this.differenceDate();
            }, 1000);
        },
    },
};
</script>

<style></style>
