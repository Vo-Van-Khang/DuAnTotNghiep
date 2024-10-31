<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' =>'sometimes|required',
            'email' => 'sometimes|required|email',
            'password' => 'sometimes|required|min:8',
            'thumbnail_add' => 'sometimes|required|file|mimes:jpeg,jpg,svg,webp,png|max:2048',
            'title' => 'sometimes|required|string|max:255',
            'cast' => 'sometimes|required|string|max:255',
            'director' => 'sometimes|required|string|max:255',
            'release_year' => 'sometimes|required|integer|min:1900|max:' . date('Y'),
            'country' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'duration' => 'sometimes|required|integer|min:1',
            'comment'=> 'sometimes|required|max:255',
            'filter_comment'=> 'sometimes|required|max:50',
            "episode" => "sometimes|required|min:1",
        ];
        if ($this->hasFile('thumbnail')) {
            $rules['thumbnail'] = 'file|mimes:jpeg,jpg,svg,webp,png|max:2048';
        }   
        return $rules;
    }
    public function messages(): array
    {
        return [
            // 'name.required' => 'Tên là bắt buộc.',
            // 'email.required' => 'Email là bắt buộc.',
            // 'email.email' => 'Email không hợp lệ.',

            // 'password.required' => 'Mật khẩu là bắt buộc.',
            // 'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            // 'password.confirm' => 'Mật khẩu không khớp.',

            'thumbnail_add.required' => 'Hình ảnh là bắt buộc.',
            'thumbnail_add.mimes' => 'Hình ảnh phải thuộc loại: jpeg, png, jpg, svg, webp.',
            'thumbnail_add.max' => 'Kích thước hình ảnh không vượt quá 2048 kb.',

            'thumbnail.mimes' => 'Hình ảnh phải thuộc loại: jpeg, png, jpg, svg, webp.',
            'thumbnail.max' => 'Kích thước hình ảnh không vượt quá 2048 kb.',

            'title.required' => 'Tiêu đề là bắt buộc.',
            'title.string' => 'Tiêu đề phải là một chuỗi.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            
            'cast.required' => 'Diễn viên là bắt buộc.',
            'cast.string' => 'Diễn viên phải là một chuỗi.',
            'cast.max' => 'Diễn viên không được vượt quá 255 ký tự.',
            
            'director.required' => 'Đạo diễn là bắt buộc.',
            'director.string' => 'Đạo diễn phải là một chuỗi.',
            'director.max' => 'Đạo diễn không được vượt quá 255 ký tự.',
            
            'release_year.required' => 'Năm phát hành là bắt buộc.',
            'release_year.min' => 'Năm phát hành phải lớn hơn hoặc bằng 1900.',
            'release_year.max' => 'Năm phát hành không được lớn hơn ' . date('Y') . '.',
            
            'country.required' => 'Quốc gia là bắt buộc.',
            'country.string' => 'Quốc gia phải là một chuỗi.',
            'country.max' => 'Quốc gia không được vượt quá 255 ký tự.',
            
            'description.required' => 'Mô tả là bắt buộc.',
            'description.string' => 'Mô tả phải là một chuỗi.',
            
            'duration.required' => 'Thời lượng là bắt buộc.',
            'duration.min' => 'Thời lượng phải lớn hơn hoặc bằng 1.',
            'duration.integer' => 'Thời lượng phải là số nguyên.',

            // 'comment.required' => 'Nội dung bình luận là bắt buộc.',
            // 'comment.max' => 'Bình luận phải ít hơn 256 kí tự.',

            // 'filter_comment.required' => 'Nội dung là bắt buộc.',
            // 'filter_comment.max' => 'Nội dung phải ít hơn 51 kí tự.',

            'episode.required' => 'Tập phim là bắt buộc.',
            'episode.min' => 'Tập phim phải trên 1.',
        ];
    }
}
