<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUsersTopiRequest;
use App\Http\Requests\UsersTopiRequest as RequestsUsersTopiRequest;
use App\Models\Users_Topi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersTopiController extends Controller
{

    //トピ一覧画面
    public function index()
    {

        $topis = Users_Topi::latest('updated_at')->get();

        return view('admin.users_topi.index', ['topis' => $topis]);
    }


    //adminトピ作成画面
    public function create()
    {
        return view('admin.users_topi.create');
    }

    //adminトピ作成処理
    public function store(RequestsUsersTopiRequest $request)
    {
        $savedHLImagePath = $request->file('hl_image')->store('hl_image', 'public');
        $savedMAINImagePath = $request->file('main_image')->store('main_image', 'public');
        $savedEMBImagePath = $request->file('emb_img')->store('emb_img', 'public');

        $topi = new Users_Topi($request->validated());

        $topi->password = HASH::make($topi['password']);

        $topi->hl_image = $savedHLImagePath;
        $topi->main_image = $savedMAINImagePath;
        $topi->emb_img = $savedEMBImagePath;
        $topi->save();

        return to_route('admin.users_topi.index')->with('success', '登録はできました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users_Topi  $users_Topi
     * @return \Illuminate\Http\Response
     */
    public function show(Users_Topi $users_Topi)
    {
        //
    }

    //adminトピ編集画面
    public function edit($id)
    {
        $topi = Users_Topi::findOrFail($id);

        return view('admin.users_topi.edit', ['topi' => $topi]);
    }


    public function update(UpdateUsersTopiRequest $request, $id)
    {
        $topi = Users_Topi::findOrFail($id);
        $updateData = $request->validated();

        //画像を変更する場合
        if ($request->has('hl_image')) {

            //変更前の画像削除(できている)
            Storage::disk('public')->delete($topi->hl_image);

            //変更後の画像をアップデート、保存パスを更新対象データにセット
            $UpdatesavedHLImagePath = $request->file('hl_image')->store('hl_image', 'public');
            $topi->hl_image = $UpdatesavedHLImagePath;
        }


        if ($request->has('main_image')) {

            //変更前の画像削除
            Storage::disk('public')->delete($topi->main_image);
            //変更後の画像をアップデート、保存パスを更新対象データにセット
            $UpdatesavedMAINImagePath = $request->file('main_image')->store('main_image', 'public');
            $topi->main_image = $UpdatesavedMAINImagePath;
        }

        if ($request->has('emb_img')) {

            //変更前の画像削除
            Storage::disk('public')->delete($topi->emb_img);
            //変更後の画像をアップデート、保存パスを更新対象データにセット
            $UpdatesavedEMBImagePath = $request->file('emb_img')->store('emb_img', 'public');
            $topi->emb_img = $UpdatesavedEMBImagePath;
        }


        $topi->update($updateData);

        return to_route('admin.users_topi.index')->with('success', '更新はできました');
    }


    //指定したトピの削除
    public function destroy($id)
    {
        $topi = Users_Topi::findOrFail($id);
        $topi->delete();

        Storage::disk('public')->delete($topi->hl_image);
        Storage::disk('public')->delete($topi->main_image);
        Storage::disk('public')->delete($topi->emb_img);

        return to_route('admin.users_topi.index')->with('success', '削除はできました');
    }
}
