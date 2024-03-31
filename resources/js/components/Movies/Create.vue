<template>
    <h4 class="mt-2 mb-2">Create Movie </h4>
    <div class="card mt-3">
        <div class="card-body">
            <form >
                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="text" placeholder="Enter title" name="title">
                </div>
                <div class="mb-3">
                    <label for="description">Description:</label>
                    <textarea  class="form-control" rows="5" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="pwd">Genre:</label>
                    <select id="client_id" class="form-control">
                        <option value="" selected>-- Choose genre --</option>
                        <option v-for="genre in genres" :value="genre.id">
                            {{ genre.name }}
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary cursor-not-allowed">
                    <span>Save</span>
                </button>
            </form>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue';
import useGenres from "../../composables/genres";

const { genres, getGenres } = useGenres()

onMounted(() => {
    getGenres()
})

</script>
