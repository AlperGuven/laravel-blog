<template>
    <div>
        <form>
            <label for="login">Feel free to type something</label>
            <input
                type="text"
                name="email"
                id="email"
                placeholder="Email or nickname"
                aria-label="email"
                autocomplete="example@example.com"
                required=""
            />
            <label for="login">It's really important to remember</label>
            <input
                type="password"
                name="password"
                placeholder="Password"
                aria-label="Password"
                required=""
            />
            <button
                type="submit"
                class="contrast lined thick white"
                aria-label="Example button"
                aria-busy="false"
                onclick="event.preventDefault()"
            >
                Login
            </button>
        </form>
    </div>
</template>

<script setup></script>
<style scoped></style>
