package vocs.com.vocs;

import com.google.gson.annotations.SerializedName;

import java.util.List;

/**
 * Created by ASUS on 26/10/2017.
 */

public class Word {

    private String trads[];
    private Langage language;
    private String content;

    public String[] getTrads() {
        return trads;
    }

    public void setTrads(String[] trads) {
        this.trads = trads;
    }

    public Langage getLanguage() {
        return language;
    }

    public void setLanguage(Langage language) {
        this.language = language;
    }

    public String getContent() {
        return content;
    }

    public void setContent(String content) {
        this.content = content;
    }
}
