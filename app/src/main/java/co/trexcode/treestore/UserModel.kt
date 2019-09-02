package co.trexcode.treestore


object UserModel {

    data class User(
        val code: Int,
        val message: String,
        val data: Data
    )

    data class Data(
        val id: String,
        val name: String,
        val password: String,
        val picture: String,
        val status: String,
        val username: String
    )

}