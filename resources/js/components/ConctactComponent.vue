// src/components/YourFormComponent.vue
<template>
    <div class="contact__card">
        <Form>
            <form
                @submit.prevent="handleSubmit(onSubmit)"
                class="contact__form"
            >
                <!-- Nombre (Input de texto) -->
                <div class="contact__form--row">
                    <label class="contact__form--label" for="name"
                        ><span class="required">*</span>Nombre:</label
                    >
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
                    <label class="contact__form--label" for="message"
                        ><span class="required">*</span>Mensaje:</label
                    >
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
                    <label class="contact__form--label"
                        ><span class="required">*</span>Asistiré:</label
                    >
                    <div class="contact__form--radio">
                        <Field
                            id="attendanceYes"
                            class="contact__form--radio-input"
                            name="attendance"
                            type="radio"
                            value="yes"
                            v-model="form.attendance"
                            rules="required"
                        />
                        <label
                            for="attendanceYes"
                            class="contact__form--radio-label"
                        >
                            Yes
                        </label>
                        <Field
                            id="attendanceMaybe"
                            class="contact__form--radio-input"
                            name="attendance"
                            type="radio"
                            value="maybe"
                            v-model="form.attendance"
                            rules="required"
                        />
                        <label
                            for="attendanceMaybe"
                            class="contact__form--radio-label"
                        >
                            Maybe
                        </label>
                        <Field
                            id="attendanceNo"
                            class="contact__form--radio-input"
                            name="attendance"
                            type="radio"
                            value="no"
                            v-model="form.attendance"
                            rules="required"
                        />
                        <label
                            for="attendanceNo"
                            class="contact__form--radio-label"
                        >
                            No
                        </label>
                    </div>
                    <ErrorMessage
                        class="contact__form--error"
                        name="attendance"
                    />
                </div>

                <button class="contact__form--button" type="submit">
                    Send Now!
                </button>
            </form>
        </Form>
    </div>
</template>
<script>
import { Field, ErrorMessage, Form, defineRule } from "vee-validate";
import { required, min } from "@vee-validate/rules";
import axios from "axios";
// Define las reglas personalizadas para VeeValidate
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
        };
    },
    methods: {
        async handleSubmit(values) {
            console.log("aca");
            try {
                const response = await axios.post("/your-endpoint", values);
                console.log("Form submitted:", response.data);
            } catch (error) {
                console.error("Submission error:", error);
            }
        },
    },
};
</script>
