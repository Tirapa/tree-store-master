package co.trexcode.treestore

import io.reactivex.Observable
import okhttp3.RequestBody
import okhttp3.MultipartBody
import okhttp3.ResponseBody
import retrofit2.http.*


interface APIsService {

    @GET("goods.php?REQUEST_METHOD=goods")
    fun getGoods(): Observable<GoodsModel.Goods>

    @Multipart
    @POST("editGoods.php?REQUEST_METHOD=editGoods")
    fun editGoods(
        @Part image: MultipartBody.Part?,
        @Part("id") id: RequestBody,
        @Part("name") name: RequestBody,
        @Part("detail") detail: RequestBody,
        @Part("price") price: RequestBody
    ): Observable<ResponseBody>

    @Multipart
    @POST("addGoods.php?REQUEST_METHOD=addGoods")
    fun addGoods(
        @Part image: MultipartBody.Part?,
        @Part("name") name: RequestBody,
        @Part("detail") detail: RequestBody,
        @Part("price") price: RequestBody
    ): Observable<ResponseBody>

    @Multipart
    @POST("postPayment.php?REQUEST_METHOD=postPayment")
    fun uploadFile(
        @Part image: MultipartBody.Part,
        @Part("userId") userId: RequestBody,
        @Part("goodsId") goodsId: RequestBody,
        @Part("amount") amount: RequestBody,
        @Part("datetime") datetime: RequestBody,
        @Part("status") status: RequestBody
    ): Observable<ResponseBody>

    @FormUrlEncoded
    @POST("register.php?REQUEST_METHOD=register")
    fun register(
        @Field("username") username: String,
        @Field("password") password: String,
        @Field("name") name: String
    ): Observable<NormalModel>

    @FormUrlEncoded
    @POST("login.php?REQUEST_METHOD=login")
    fun login(
        @Field("username") username: String,
        @Field("password") password: String
    ): Observable<UserModel.User>

    @GET("payments.php?REQUEST_METHOD=payments")
    fun getUserPayment(
        @Query("user_id") user_id: String
    ): Observable<PaymentModel.Payment>

    @GET("deleteGoods.php?REQUEST_METHOD=deleteGoods")
    fun deleteGoods(
        @Query("id") id: String
    ): Observable<ResponseBody>

    @GET("payments_detail.php?REQUEST_METHOD=payments_detail")
    fun getPaymentDetail(
        @Query("id") id: String
    ): Observable<PaymentDetailModel.Payment>

    @GET("confirmPayment.php?REQUEST_METHOD=confirmPayment")
    fun getConfirmPayment(
        @Query("id") id: String
    ): Observable<ResponseBody>

}
