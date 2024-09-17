<template>
    <div class="contact__card">
        <Form>
            <form
                @submit.prevent="handleSubmit(onSubmit)"
                class="contact__form"
            >
                <!-- Nombre (Input de texto) -->
                <div class="contact__form--row">
                    <label class="contact__form--label" for="name">
                        <span class="required">*</span>Nombre y Apellido:
                    </label>
                    <Field
                        class="contact__form--input"
                        name="name"
                        as="input"
                        type="text"
                        v-model="form.name"
                        rules="required"
                    />
                    <ErrorMessage class="contact__form--error" name="name" />
                </div>
                
                <!-- Mensaje (TextArea) -->
                <div class="contact__form--row">
                    <label class="contact__form--label" for="message">
                        <span class="required">*</span>Mensaje:
                    </label>
                    <Field
                        class="contact__form--input"
                        name="message"
                        as="textarea"
                        v-model="form.message"
                        rules="required|min:10"
                    />
                    <ErrorMessage class="contact__form--error" name="message" />
                </div>

                <!-- Asistencia (Radio buttons) -->
                <div>
                    <label class="contact__form--label">
                        <span class="required">*</span>Asistiré:
                    </label>
                    <div class="contact__form--radio">
                        <Field
                            id="attendanceYes"
                            class="contact__form--radio-input"
                            name="attendance"
                            type="radio"
                            value="sí"
                            v-model="form.attendance"
                            rules="required"
                        />
                        <label for="attendanceYes" class="contact__form--radio-label">
                            Si
                        </label>
                        <!-- <Field
                            id="attendanceMaybe"
                            class="contact__form--radio-input"
                            name="attendance"
                            type="radio"
                            value="tal vez"
                            v-model="form.attendance"
                            rules="required"
                        />
                        <label for="attendanceMaybe" class="contact__form--radio-label">
                            Maybe
                        </label> -->
                        <Field
                            id="attendanceNo"
                            class="contact__form--radio-input"
                            name="attendance"
                            type="radio"
                            value="no"
                            v-model="form.attendance"
                            rules="required"
                        />
                        <label for="attendanceNo" class="contact__form--radio-label">
                            No
                        </label>
                    </div>
                    <ErrorMessage class="contact__form--error" name="attendance" />
                </div>

                <button class="contact__form--button" type="submit">
                    Enviar
                </button>
            </form>
        </Form>

        <!-- Popup de confirmación -->
        <div v-if="showPopup" class="popup-overlay">
            <div class="popup-content">
                <h2>Formulario enviado</h2>
                <p>Tu mensaje ha sido enviado exitosamente.</p>
                <button @click="closePopup">Cerrar</button>
            </div>
        </div>
    </div>
</template>

<script>
import { Field, ErrorMessage, Form, defineRule } from "vee-validate";
import { required, min } from "@vee-validate/rules";
import axios from "axios";

defineRule("required", required);
defineRule("min", min);

export default {
    components: {
        Field,
        ErrorMessage,
        Form,
    },
    data() {
        return {
            form: {
                name: "",
                message: "",
                attendance: "",
            },
            showPopup: false, // Controla la visibilidad del popup
        };
    },
    methods: {
        async handleSubmit(values) {
            try {
                const response = await axios.post("/api/eventos", {
                    nombre: this.form.name,
                    mensaje: this.form.message,
                    asistire: this.form.attendance,
                });
                console.log("Form submitted:", response.data);

                // Mostrar el popup al enviar el formulario
                this.showPopup = true;
            } catch (error) {
                console.error("Submission error:", error);
            }
        },
        closePopup() {
            // Cierra el popup
            this.showPopup = false;
        },
    },
};
</script>

<style scoped>
/* Estilos para el popup */
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.popup-content {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
}

.popup-content h2 {
    margin-bottom: 10px;
}

.popup-content button {
    background-color: #083844;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
